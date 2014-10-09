#!/usr/bin/env perl

my $dbi_driver = "DBI:mysql";
my $dbi_db = "strabismus";
my $dbi_user = "root";
my $dbi_pass = "pikachu";

use DBI;
use Data::Dumper 'Dumper';

sub get {
  my ($dbh) = @_;
  my $sth = $dbh->prepare("SELECT * from tbl_dataset")
	or die("failed to prepare statement: " . $dbh->errstr());
  $sth->execute
	or die("failed to execute SQL: " . $dbh->errstr());
  return $sth;
}

sub _ethnic_group {
  my ($in) = @_;
  return "Not stated" if $in eq 'Unknown';
  return "White British" if $in eq 'British';
  return "White Irish" if $in eq 'Irish';
  return "Any other White background" if $in eq 'Any other White background';
  return "Mixed - White and Black Caribbean" if $in eq 'White and Black Caribbean';
  return "Mixed - White and Black Africa" if $in eq 'White and Black African';
  return "Mixed - White and Asian" if $in eq 'White and Asian';
  return "Any other mixed background" if $in eq 'Any other mixed background';
  return "Asian or Asian British - Indian" if $in eq 'Indian';
  return "Asian or Asian British - Pakistani" if $in eq 'Pakistani';
  return "Asian or Asian British - Bangladeshi" if $in =~ /Bangladeshi/; # Oh FFS
  return "Any other Asian background" if $in eq "Any other Asian background";
  return "Black or Black British - Caribbean" if $in eq 'Caribbean';
  return "Black or Black British - African" if $in eq 'African';
  return "Any other Black background" if $in eq "Any other Black background";
  return "Chinese" if $in eq 'Chinese';
  return "Any other ethnic group" if $in eq 'Any other ethnic group';
  die("Invalid ethnic group: '$in'") if $in;
  return "";
}


my @shared = (
  'asmt_IXTQ', 'asmt_ahp_angle', 'asmt_ahp_desc', 'asmt_ahp_present',
  'asmt_amblyopia_treatment', 'asmt_amblyopia', 'asmt_angle_near',
  'asmt_axis_left', 'asmt_axis_right', 'asmt_bcva_kay_left',
  'asmt_bcva_kay_right', 'asmt_bcva_let_left', 'asmt_bcva_let_right',
  'asmt_cyl_left', 'asmt_cyl_right', 'asmt_date', 'asmt_diplopia',
  'asmt_fixation_left', 'asmt_fixation_right', 'asmt_near_left',
  'asmt_near_right', 'asmt_newcastle_distance', 'asmt_newcastle_home',
  'asmt_newcastle_near', 'asmt_notes', 'asmt_num_ops', 'asmt_pattern',
  'asmt_refraction_worn', 'asmt_spectacle_wear', 'asmt_sphere_left',
  'asmt_sphere_right', 'asmt_stereo_frisby', 'asmt_stereo_lang',
  'asmt_stereo_present', 'asmt_stereo_tno', 'asmt_type',
  'early_angle_near', 'early_bcva_kay_left', 'early_bcva_kay_right',
  'early_bcva_let_left', 'early_bcva_let_right', 'early_date',
  'early_fixation_left', 'early_fixation_right', 'early_notes',
  'late_IXTQ', 'late_ahp_angle', 'late_ahp_desc', 'late_ahp_present',
  'late_amblyopia', 'late_angle_near', 'late_bcva_kay_left',
  'late_bcva_kay_right', 'late_bcva_let_left', 'late_bcva_let_right',
  'late_comments', 'late_comp_antseg_ischaemia',
  'late_comp_clinic_cause', 'late_comp_endophthalmitis',
  'late_comp_iatrogenic_diplopia', 'late_comp_new_amblyopia',
  'late_comp_none', 'late_comp_orb_inf', 'late_comp_rrd',
  'late_comp_scleritis', 'late_comp_slipped_muscle',
  'late_comp_theatre_cause', 'late_comp_unscheduled_clinic',
  'late_comp_unscheduled_theatre', 'late_date', 'late_diplopia',
  'late_fixation_left', 'late_fixation_right',
  'late_newcastle_distance', 'late_newcastle_home',
  'late_newcastle_near', 'late_notes', 'late_pattern',
  'late_stereo_frisby', 'late_stereo_lang', 'late_stereo_present',
  'late_stereo_tno', 'op_assistant_grade', 'op_comments',
  'op_comp_bleeding', 'op_comp_globe_perf', 'op_comp_lost_muscle',
  'op_comp_none', 'op_comp_other', 'op_comp_snapped_muscle',
  'op_comp_wrong_direction', 'op_comp_wrong_side', 'op_comps',
  'op_date', 'op_eyedraw_left', 'op_eyedraw_right', 'op_lio_amount',
  'op_lio_surgery', 'op_lir_amount', 'op_lir_surgery',
  'op_lir_transposition', 'op_llr_amount', 'op_llr_surgery',
  'op_llr_transposition', 'op_lmr_amount', 'op_lmr_surgery',
  'op_lmr_transposition', 'op_lso_surgery', 'op_lsr_amount',
  'op_lsr_surgery', 'op_lsr_transposition', 'op_measurement_point',
  'op_rio_amount', 'op_rio_surgery', 'op_rir_amount', 'op_rir_surgery',
  'op_rir_transposition', 'op_rlr_amount', 'op_rlr_surgery',
  'op_rlr_transposition', 'op_rmr_amount', 'op_rmr_surgery',
  'op_rmr_transposition', 'op_rso_surgery', 'op_rsr_amount',
  'op_rsr_surgery', 'op_rsr_transposition', 'op_surgeon_grade',
  'plan_goals', 'plan_other', 'pt_age', 'pt_postcode', 'pt_sex',
  'userId', 'uuid',
);

my @removed = (
  'asmt_angle_dist', 'asmt_category', 'asmt_cover_dist',
  'asmt_cover_near', 'asmt_prior_toxin', 'early_angle_dist',
  'early_cover_dist', 'early_cover_near', 'late_angle_dist',
  'late_cover_dist', 'late_cover_near', 'op_lso_amount',
  'op_rso_amount', 'plan_target_angle', 'plan_target_direction',
  'plan_target_distance'
);

my @new_ignored = (
  'asmt_binoc_with_cor', 'asmt_binoc_without_cor', 'asmt_category',
  'asmt_cover_hor_dist', 'asmt_cover_hor_near', 'asmt_cover_vert_dist',
  'asmt_cover_vert_near', 'asmt_functional', 'asmt_hor_angle_dist',
  'asmt_hvt_bl', 'asmt_hvt_bm', 'asmt_hvt_br', 'asmt_hvt_ml',
  'asmt_hvt_mm', 'asmt_hvt_mr', 'asmt_hvt_tl', 'asmt_hvt_tm',
  'asmt_hvt_tr', 'asmt_neuro_disease', 'asmt_orbital_surg',
  'asmt_other_eye_disease', 'asmt_other_eye_surg', 'asmt_other',
  'asmt_previous_toxin', 'asmt_psychosocial', 'asmt_torsion_amt',
  'asmt_torsion_clock', 'asmt_torsion_side', 'asmt_torsion_sub',
  'asmt_torsion', 'asmt_total', 'asmt_ver_angle_dist',
  'asmt_ver_angle_near', 'early_cover_hor_dist', 'early_cover_hor_near',
  'early_cover_vert_dist', 'early_cover_vert_near',
  'early_hor_angle_dist', 'early_torsion_amt', 'early_torsion_clock',
  'early_torsion_side', 'early_torsion_sub', 'early_torsion',
  'early_ver_angle_dist', 'early_ver_angle_near', 'late_binoc_with_cor',
  'late_binoc_without_cor', 'late_cover_hor_dist',
  'late_cover_hor_near', 'late_cover_vert_dist', 'late_cover_vert_near',
  'late_hor_angle_dist', 'late_torsion_amt', 'late_torsion_clock',
  'late_torsion_side', 'late_torsion_sub', 'late_torsion',
  'late_ver_angle_dist', 'late_ver_angle_near', 'op_anaeshetic',
  'op_lio_position', 'op_lio_transposition', 'op_lso_amount',
  'op_rio_position', 'op_rio_transposition', 'op_rso_amount',
  'plan_distance', 'plan_eccentric', 'plan_hor_target_angle',
  'plan_hor_target_direction', 'plan_position', 'plan_torsion',
  'plan_ver_target_angle', 'plan_ver_target_direction',
  'plan_zero_torsion', 'prom_as20_postop', 'prom_as20_preop',
  'prom_likert', 'pt_ethnic_group',
);

my @special = qw(asmt_category asmt_prior_toxin pt_ethnic_group);
my @special_out = qw(asmt_previous_toxin pt_ethnic_group);

sub transform_one {
  my (%in) = @_;
  my %out;
  foreach my $k (keys %in) {
	if ($k eq 'pt_ethnic_group') {
	  $out{$k} = _ethnic_group($in{pt_ethnic_group});
	} elsif ($k eq 'asmt_category') {
	  # Quietly drop it
	} elsif ($k eq 'asmt_prior_toxin') {
	  $out{asmt_previous_toxin} = $in{$k};
	} elsif (grep $_ eq $k, @shared) {
	  $out{$k} = $in{$k}
	}
  }
  return %out;
}

sub put_new {
  my ($dbh, %kv) = @_;
  my @fields = (@shared, @special_out);
  my $fields = join (", ", map('`' . $_ . '`', @fields));
  my $count = scalar @fields;
  my $placeholders = join (", ", map("?", 1..$count));
  my $sql = qq(
    INSERT INTO tbl_adult_dataset(
      $fields
    ) values (
      $placeholders
    )
  );
  my $sth = $dbh->prepare($sql)
  	or die("failed to prepare statement: " . $dbh->errstr());
  $sth->execute(@kv{@fields})
  	or die("failed to execute SQL: " . $dbh->errstr());
#  print $sql;
}

sub go {
  my $dbh = DBI->connect($dbi_driver . ":" . $dbi_db, $dbi_user, $dbi_pass)
	or die("failed to connect to MySQL database: " . DBI->errstr());
  my $sth = get($dbh);
  while (my $in = $sth->fetchrow_hashref) {
	my %out = transform_one(%$in);
	put_new($dbh, %out);
  }
}

go();

__END__
