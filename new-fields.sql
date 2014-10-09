alter table tbl_adult_dataset add column plan_goal_hor_align_pri bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_ver_align_pri bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_hor_align_ecc bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_ver_align_ecc bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_con_int_squint bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_abn_head_postn bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_binoc bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_torsion bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_alppat bool after plan_goals;
alter table tbl_adult_dataset add column plan_goal_vis_acu bool after plan_goals;


plan_goal_hor_align_pri, plan_goal_ver_align_pri, plan_goal_hor_align_ecc, plan_goal_ver_align_ecc, plan_goal_con_int_squint, plan_goal_abn_head_postn, plan_goal_binoc, plan_goal_torsion, plan_goal_alppat, plan_goal_vis_acu

alter table tbl_adult_dataset add column late_hvt_tr text after late_comments;
alter table tbl_adult_dataset add column late_hvt_tm text after late_hvt_tr;
alter table tbl_adult_dataset add column late_hvt_tl text after late_hvt_tm;
alter table tbl_adult_dataset add column late_hvt_mr text after late_hvt_tl;
alter table tbl_adult_dataset add column late_hvt_mm text after late_hvt_mr;
alter table tbl_adult_dataset add column late_hvt_ml text after late_hvt_mm;
alter table tbl_adult_dataset add column late_hvt_br text after late_hvt_ml;
alter table tbl_adult_dataset add column late_hvt_bm text after late_hvt_br;
alter table tbl_adult_dataset add column late_hvt_bl text after late_hvt_bm;
alter table tbl_adult_dataset add column late_outcome_near_target bool after late_hvt_bl;
alter table tbl_adult_dataset add column late_unwanted_overcorrection bool after late_near_target;







