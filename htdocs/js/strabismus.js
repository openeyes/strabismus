/**
 * Contains functions to make table of related managements work with form submission
 *
 */

/**
 * Global variables for ease of referencing muscles
 */
var rmr;
var rlr;
var rsr;
var rir;
var lmr;
var llr;
var lsr;
var lir;
var trans;
var el;

// Associative array linking types with categories for Adult dataset
var typeList = new Array();
typeList['Previously operated childhood ET/XT'] = new Array('Consecutive XT', 'Residual XT', 'Consecutive ET', 'Residual ET');
typeList['Childhood ET - not previously operated'] = new Array('early onset (infantile) ET', 'constant accommodative ET (partially accommodative)', 'non-accommodative ET', 'convergence excess ET', 'near ET', 'other childhood ET (specify)');
typeList['Childhood XT - not previously operated'] = new Array('intermittent distance XT', 'basic XT', 'near XT (convergence weakness)', 'infantile XT', 'convergence insufficiency', 'other childhood XT (specify)');
typeList['Sensory (due to poor vision)'] = new Array('Sensory XT', 'Sensory ET', 'Sensory updrift/downdrift');
typeList['Oblique dysfunction/Alphabet pattern'] = new Array('SO UA congenital', 'SO UA acquired', 'SO OA', 'IO OA from infantile ET', 'IO OA primary', 'Brown', 'significant A pattern', 'significant V pattern', 'Other oblique (specify)');
typeList['Neurological'] = new Array('VI (partial)', 'VI (complete)', 'III (partial)', 'III (complete)', 'Monocular elevation deficiency', 'INO', 'Myasthenia', 'CPEO', 'Other neurological (specify)');
typeList['Restrictive'] = new Array('Thyroid', 'Orbital wall fracture vertical', 'Orbital wall fracture horizontal', 'Duane', 'Previous eye surgery', 'Other restrictive (specify)');
typeList['DVD'] = new Array('DVD');
typeList['Nystagmus'] = new Array('For horizontal head position (Kestenbaum/Anderson)', 'For vertical head position', 'For head tilt', 'For acuity (tenotomies/all recessions)');
typeList['Other'] = new Array('Specify');

// Called when create or update form is loaded
function formInit()
{
	// Get value of category
	var categoryDropDown = document.getElementById('Dataset_asmt_category');
	if (categoryDropDown) {
		var dropDownId = (categoryDropDown.value == 'esotropia')?'esoDropDown':'exoDropDown';
	
		var typeValue = document.getElementById('Dataset_asmt_type').value;
		if (typeValue)
		{
			document.getElementById(dropDownId).value = typeValue;
			
			typeChange(typeValue);
		}
		
		// Trigger disappearance of one of the dropdowns
		categoryChange(categoryDropDown);
	}
		
	// Ensure optional sections are set on update
	stereoChange(document.getElementById('Dataset_asmt_stereo_present'),"asmtStereoSection");
	ahpChange(document.getElementById('Dataset_asmt_ahp_present'), "asmtAhpSection");
	amblyopiaChange(document.getElementById('Dataset_asmt_amblyopia').value);
	
	compChange(document.getElementById('Dataset_op_comp_none'), "opCompSection");
	compChange(document.getElementById('Dataset_late_comp_none'), "lateCompSection");
	lateClinicChange(document.getElementById('Dataset_late_comp_unscheduled_clinic'), "lateClinicCauseRow");
	lateTheatreChange(document.getElementById('Dataset_late_comp_unscheduled_theatre'), "lateTheatreCauseRow");

	stereoChange(document.getElementById('Dataset_late_stereo_present'),"lateStereoSection");	
	ahpChange(document.getElementById('Dataset_late_ahp_present'), "lateAhpSection");
}

// Called when create or update form is loaded
function adultFormInit()
{
	// Get value of category
	var categoryDropDown = document.getElementById('Dataset_asmt_category');
	if (categoryDropDown) {
		var dropDownId = (categoryDropDown.value == 'esotropia')?'esoDropDown':'exoDropDown';
	
		var typeValue = document.getElementById('Dataset_asmt_type').value;
		if (typeValue)
		{
			document.getElementById(dropDownId).value = typeValue;
			
			typeChange(typeValue);
		}
		
		// Trigger disappearance of one of the dropdowns
		categoryChange(categoryDropDown);
	}
		
	// Ensure optional sections are set on update
	stereoChange(document.getElementById('AdultDataset_asmt_stereo_present'),"asmtStereoSection");
	ahpChange(document.getElementById('AdultDataset_asmt_ahp_present'), "asmtAhpSection");
/* 	amblyopiaChange(document.getElementById('AdultDataset_asmt_amblyopia').value); */
	
	compChange(document.getElementById('AdultDataset_op_comp_none'), "opCompSection");
	compChange(document.getElementById('AdultDataset_late_comp_none'), "lateCompSection");
	lateClinicChange(document.getElementById('AdultDataset_late_comp_unscheduled_clinic'), "lateClinicCauseRow");
	lateTheatreChange(document.getElementById('AdultDataset_late_comp_unscheduled_theatre'), "lateTheatreCauseRow");

	stereoChange(document.getElementById('AdultDataset_late_stereo_present'),"lateStereoSection");	
	ahpChange(document.getElementById('AdultDataset_late_ahp_present'), "lateAhpSection");
}

// Category change, called by change in asmt_category dropdown
function categoryChange(_obj)
{
	// Original dataset
	if (_obj.value == 'esotropia')
	{
		document.getElementById('exoDropDown').style.display = "none";
		document.getElementById('esoDropDown').style.display = "block";
		typeChange(document.getElementById('esoDropDown').value);

	}
	else if (_obj.value == 'exotropia')
	{
		document.getElementById('esoDropDown').style.display = "none";
		document.getElementById('exoDropDown').style.display = "block";
		typeChange(document.getElementById('exoDropDown').value);		
	}
	
	// Adult dataset
	else
	{
		var typeDropDown = document.getElementById('typeDropDown');
		emptyList(typeDropDown);
		fillList(typeDropDown, typeList[_obj.value]);
		adultTypeChange(typeDropDown.value);
	}
}

// Called by change in strabismus type dropdown
function typeChange(_value)
{
	document.getElementById('Dataset_asmt_type').value = _value;
	console.log(_value);
	
	// Newcastle section only appears for intermittent exotropias only
	if (_value == 'intermittent distance exotropia')
	{
		document.getElementById('newcastleSection').style.display = "block";
		document.getElementById('newcastleSectionLabel').style.display = "block";
		document.getElementById('lateNewcastleSection').style.display = "block";
		document.getElementById('lateNewcastleSectionLabel').style.display = "block";
	}
	else
	{
		document.getElementById('newcastleSection').style.display = "none";
		document.getElementById('newcastleSectionLabel').style.display = "none";
		document.getElementById('lateNewcastleSection').style.display = "none";
		document.getElementById('lateNewcastleSectionLabel').style.display = "none";
	}
}

// Called by change in strabismus type dropdown
function adultTypeChange(_value)
{
/*
	document.getElementById('Dataset_asmt_type').value = _value;
	console.log(_value);
*/
	
	// Newcastle section only appears for intermittent exotropias only
/*
	if (_value == 'intermittent distance exotropia')
	{
		document.getElementById('newcastleSection').style.display = "block";
		document.getElementById('newcastleSectionLabel').style.display = "block";
		document.getElementById('lateNewcastleSection').style.display = "block";
		document.getElementById('lateNewcastleSectionLabel').style.display = "block";
	}
	else
	{
		document.getElementById('newcastleSection').style.display = "none";
		document.getElementById('newcastleSectionLabel').style.display = "none";
		document.getElementById('lateNewcastleSection').style.display = "none";
		document.getElementById('lateNewcastleSectionLabel').style.display = "none";
	}
*/
}

// Called by change in type of oblique surgery
function obliqueChange(_element, _posId, _transId)
{
	// Get reference to addtional dropdowns
	var posDropDown = document.getElementById(_posId);
	var transDropDown = document.getElementById(_transId);

	// Hide addtional dropdowns	
	posDropDown.style.display = "none";
	transDropDown.style.display = "none";
	
	// Make appropriate dropdowns visible
	if (_element.value == 'recession') posDropDown.style.display = "block";
	if (_element.value == 'anterior transposition') transDropDown.style.display = "block";
}

/*
function eDparameterListener(_drawing)
{
	// Get pointer to trial lens doodle
	var doodle = _drawing.firstDoodleOfClass('TrialLens');

	// Refraction drawings
	if (_drawing.IDSuffix == "RRF")
	{
		document.getElementById('Dataset_asmt_axis_right').value = doodle.getParameter('axis');
	}
	if (_drawing.IDSuffix == "LRF")
	{
		document.getElementById('Dataset_asmt_axis_left').value = doodle.getParameter('axis');
	}
	
	// Surgical drawings
	if (_drawing.IDSuffix == "RSS")
	{
		var doodle = _drawing.selectedDoodle;
		if (doodle != null)
		{
			// Get value of transposition
			trans = doodle.getParameter('transposition');

			// Identify rectus by rotation value
			var rotationValue = Math.floor(100 * doodle.rotation/Math.PI/2);
			switch (rotationValue)
			{
				case 25:					
					document.getElementById('Dataset_op_rmr_amount').value = doodle.getParameter('recession');
					el = document.getElementById('Dataset_op_rmr_transposition');
					if (trans == 0) el.value = 'None';
					if (trans < 0) el.value = 'Up';
					if (trans > 0) el.value = 'Down';
					break;
				case 50:
					document.getElementById('Dataset_op_rir_amount').value = doodle.getParameter('recession');
					break;
				case -25:
					document.getElementById('Dataset_op_rlr_amount').value = doodle.getParameter('recession');
					el = document.getElementById('Dataset_op_rlr_transposition');
					if (trans == 0) el.value = 'None';
					if (trans < 0) el.value = 'Down';
					if (trans > 0) el.value = 'Up';
					break
				case 0:
					document.getElementById('Dataset_op_rsr_amount').value = doodle.getParameter('recession');
					break;
			}			
		}
	}
	if (_drawing.IDSuffix == "LSS")
	{
		var doodle = _drawing.selectedDoodle;
		if (doodle != null)
		{
			// Get value of transposition
			trans = doodle.getParameter('transposition');
			
			// Identify rectus by rotation value
			var rotationValue = Math.floor(100 * doodle.rotation/Math.PI/2);
			switch (rotationValue)
			{
				case -25:
					document.getElementById('Dataset_op_lmr_amount').value = doodle.getParameter('recession');
					el = document.getElementById('Dataset_op_lmr_transposition');
					if (trans == 0) el.value = 'None';
					if (trans < 0) el.value = 'Down';
					if (trans > 0) el.value = 'Up';
					break;
				case 50:
					document.getElementById('Dataset_op_lir_amount').value = doodle.getParameter('recession');
					break;
				case 25:
					document.getElementById('Dataset_op_llr_amount').value = doodle.getParameter('recession');
					el = document.getElementById('Dataset_op_llr_transposition');
					if (trans == 0) el.value = 'None';
					if (trans < 0) el.value = 'Up';
					if (trans > 0) el.value = 'Down';
					break;
				case 0:
					document.getElementById('Dataset_op_lsr_amount').value = doodle.getParameter('recession');
					break;
			}			
		}
	}	
}
*/

/**
 * Called by a change in the value of any rectus amount
 */
/*
function rectusChange(_element)
{
	// Tranpsoition value
	var tr;
	
	if (_element.id == 'Dataset_op_rmr_amount')
	{
		rmr.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_rmr_transposition')
	{
		if (_element.value == 'None') tr = 0;
		if (_element.value == 'Up') tr = -3;
		if( _element.value == 'Down') tr = 3;
		rmr.setParameterWithAnimation('transposition', tr);
	}
	if (_element.id == 'Dataset_op_rir_amount')
	{
		rir.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_rlr_amount')
	{
		rlr.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_rlr_transposition')
	{
		if (_element.value == 'None') tr = 0;
		if (_element.value == 'Up') tr = 3;
		if( _element.value == 'Down') tr = -3;
		rlr.setParameterWithAnimation('transposition', tr);
	}
	if (_element.id == 'Dataset_op_rsr_amount')
	{
		rsr.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_lmr_amount')
	{
		lmr.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_lmr_transposition')
	{
		if (_element.value == 'None') tr = 0;
		if (_element.value == 'Up') tr = 3;
		if( _element.value == 'Down') tr = -3;
		lmr.setParameterWithAnimation('transposition', tr);
	}
	if (_element.id == 'Dataset_op_lir_amount')
	{
		lir.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_llr_amount')
	{
		llr.setParameterWithAnimation('recession', _element.value);
	}
	if (_element.id == 'Dataset_op_llr_transposition')
	{
		if (_element.value == 'None') tr = 0;
		if (_element.value == 'Up') tr = -3;
		if( _element.value == 'Down') tr = 3;
		llr.setParameterWithAnimation('transposition', tr);
	}
	if (_element.id == 'Dataset_op_lsr_amount')
	{
		lsr.setParameterWithAnimation('recession', _element.value);
	}
}
*/

/**
 * Called by a change in refraction drop downs, populates value of input elements
 */
function refChange(_element)
{
	// Get root of id
	var idRoot = _element.id.substring(0, 5);
	
	// Calculate value
	var value = parseInt(document.getElementById(idRoot + '_int').value);
	value += parseFloat(document.getElementById(idRoot + '_dec').value);
	if (document.getElementById(idRoot + '_sign').value == "-")
	{
		value = value * -1;
	}
	
	// Replace value of input element
	var elementArray = {r_sph:'Dataset_asmt_sphere_right', r_cyl:'Dataset_asmt_cyl_right', l_sph:'Dataset_asmt_sphere_left', l_cyl:'Dataset_asmt_cyl_left'};
	document.getElementById(elementArray[idRoot]).value = value;

}

/**
 * Called by a change in axis value
 */
 function axisChange(_element)
 {
	 var axisValue = document.getElementById(_element.id).value;
	 if (_element.id == 'Dataset_asmt_axis_right')
	 {
		 window['ed_drawing_edit_RRF'].setParameterForDoodleOfClass('TrialLens', 'axis', axisValue);
	 }
	 if (_element.id == 'Dataset_asmt_axis_left')
	 {
		 window['ed_drawing_edit_LRF'].setParameterForDoodleOfClass('TrialLens', 'axis', axisValue);
	 }
 }

/*
 * Called for new datasets, and used to populate refraction drop downs with value
 *
 */
function refInit(_name)
{
	if (_name == 'ed_drawing_edit_RRF')
	{
		// Create an associative array to deal with all cases of sphere and cylinders
		var elementArray = {r_sph:'Dataset_asmt_sphere_right', r_cyl:'Dataset_asmt_cyl_right'};
		var axisValue = document.getElementById('Dataset_asmt_axis_right').value;	
	}
	if (_name == 'ed_drawing_edit_LRF')
	{
		// Create an associative array to deal with all cases of sphere and cylinders
		var elementArray = {l_sph:'Dataset_asmt_sphere_left', l_cyl:'Dataset_asmt_cyl_left'};
		var axisValue = document.getElementById('Dataset_asmt_axis_left').value	
	}
	
	// Iterate through keys and values
	for(var key in elementArray)
	{
		// Get float value from element
		var floatValue = parseFloat(document.getElementById(elementArray[key]).value);
		var signValue = floatValue < 0?"-":"+";
		floatValue = Math.abs(floatValue);
		var intValue = Math.floor(floatValue);
		var decValue = (floatValue - intValue).toFixed(2).substring(1,4);
		
		document.getElementById(key + '_sign').value = signValue;
		document.getElementById(key + '_int').value = intValue;
		document.getElementById(key + '_dec').value = decValue;
	}
	
	// Set axis doodle
	window[_name].setParameterForDoodleOfClass('TrialLens', 'axis', axisValue);
}

/*
 * Function called when eyeDraw has loaded any images and is ready for interaction
 */
function eyeDrawReady(_name)
{
	// Refraction doodles
	if (_name == 'ed_drawing_edit_RRF' || _name == 'ed_drawing_edit_LRF')
	{
		refInit(_name);
	}
	
/*
	// Surgery doodles
	if (_name == 'ed_drawing_edit_RSS')
	{
		// Get reference to drawing
		var drawing = window[_name];
		
        rmr = drawing.addDoodle('Rectus');
        rir = drawing.addDoodle('Rectus');
        rlr = drawing.addDoodle('Rectus');
        rsr = drawing.addDoodle('Rectus');

        rir.rotation = Math.PI;
        rsr.rotation = 0;
        rmr.rotation = Math.PI/2;
        rlr.rotation = -Math.PI/2;

        
        // Set initial values
        rmr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_rmr_amount').value);
        rir.setParameterWithAnimation('recession', document.getElementById('Dataset_op_rir_amount').value);
        rlr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_rlr_amount').value);
        rsr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_rsr_amount').value);
                 
        // Draw doodles
        drawing.deselectDoodles();
        drawing.repaint();		
	}
	if (_name == 'ed_drawing_edit_LSS')
	{
		// Get reference to drawing
		var drawing = window[_name];
		
        lmr = drawing.addDoodle('Rectus');
        lir = drawing.addDoodle('Rectus');
        llr = drawing.addDoodle('Rectus');
        lsr = drawing.addDoodle('Rectus');

        lir.rotation = Math.PI;
        lsr.rotation = 0;
        lmr.rotation = -Math.PI/2;
        llr.rotation = Math.PI/2;                        

        
        // Set initial values
        lmr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_lmr_amount').value);
        lir.setParameterWithAnimation('recession', document.getElementById('Dataset_op_lir_amount').value);
        llr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_llr_amount').value);
        lsr.setParameterWithAnimation('recession', document.getElementById('Dataset_op_lsr_amount').value);
                 
        // Draw doodles
        drawing.deselectDoodles();
        drawing.repaint();		
	}
*/

	
}

/**
 * Function called by add goal drop down
 */
function addGoal()
{
    // Get index of selected goal
    var select = document.getElementById('goalSelect');
    var selectedIndex = select.selectedIndex;
    var selectedType = select.options[selectedIndex].text;
    
    // Get reference to table
    var table = document.getElementById('goalTable');
    
    // Index of next row is equal to number of rows
    var nextRowIndex = table.tBodies[0].rows.length;
    
    // Add new row
    var newRow = table.tBodies[0].insertRow(nextRowIndex);
    
    // Goal
    var cell0 = newRow.insertCell(0);
    var textNode = document.createTextNode(selectedType);
    cell0.setAttribute('width', '80%');
    cell0.appendChild(textNode);
        
    // Create a Delete aref element
    var cell1 = newRow.insertCell(1);
    cell1.setAttribute('width', '20%');
    var deleteButton = document.createElement('a');
    deleteButton.setAttribute('onClick','deleteGoal(this);');
    deleteButton.innerText = "Delete";
    cell1.appendChild(deleteButton);
    
    // Also add to hidden text input
    document.getElementById('Dataset_plan_goals').value += '|' + selectedType + '|';
    
    // Return select to normal
    select.selectedIndex = 0;
}

// Delete goal
function deleteGoal(obj)
{
    // Get index of row
    var rowIndex = obj.parentNode.parentNode.sectionRowIndex;

    // Get text contexts of table and add delimiters
    var deleteString = document.getElementById('goalTable').rows[rowIndex].cells[0].firstChild.nodeValue;
    deleteString = '|' + deleteString +'|';
    
    // Get input value and remove string
    var inputString = document.getElementById('Dataset_plan_goals').value;
    document.getElementById('Dataset_plan_goals').value = inputString.replace(deleteString, '');
  
    // Delete it from table
    document.getElementById('goalTable').deleteRow(rowIndex);
}

/**
 * Function called by add comp drop down
 */
function addComp()
{
    // Get index of selected goal
    var select = document.getElementById('compSelect');
    var selectedIndex = select.selectedIndex;
    var selectedType = select.options[selectedIndex].text;
    
    // Get reference to table
    var table = document.getElementById('compTable');
    
    // Index of next row is equal to number of rows
    var nextRowIndex = table.tBodies[0].rows.length;
    
    // Add new row
    var newRow = table.tBodies[0].insertRow(nextRowIndex);
    
    // Goal
    var cell0 = newRow.insertCell(0);
    var textNode = document.createTextNode(selectedType);
    cell0.setAttribute('width', '80%');
    cell0.appendChild(textNode);
        
    // Create a Delete aref element
    var cell1 = newRow.insertCell(1);
    cell1.setAttribute('width', '20%');
    var deleteButton = document.createElement('a');
    deleteButton.setAttribute('onClick','deleteComp(this);');
    deleteButton.innerText = "Delete";
    cell1.appendChild(deleteButton);
    
    // Also add to hidden text input
    document.getElementById('Dataset_op_comps').value += '|' + selectedType + '|';
    
    // Return select to normal
    select.selectedIndex = 0;
}

// Delete comp
function deleteComp(obj)
{
    // Get index of row
    var rowIndex = obj.parentNode.parentNode.sectionRowIndex;

    // Get text contexts of table and add delimiters
    var deleteString = document.getElementById('compTable').rows[rowIndex].cells[0].firstChild.nodeValue;
    deleteString = '|' + deleteString +'|';
    
    // Get input value and remove string
    var inputString = document.getElementById('Dataset_op_comps').value;
    document.getElementById('Dataset_op_comps').value = inputString.replace(deleteString, '');
  
    // Delete it from table
    document.getElementById('compTable').deleteRow(rowIndex);
}

// AHP change, called by change in asmt_ahp_present checkbox
function ahpChange(_obj, _id)
{
	if (_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

// Steroeoacuity change, called by change in asmt_stereo_present checkbox
function stereoChange(_obj, _id)
{
	if (_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

// Amblyopia change
function amblyopiaChange(value)
{
	if(value != 'None')
	{
		document.getElementById('amblyopiaSection').style.display = "block";
	}
	else
	{
		document.getElementById('amblyopiaSection').style.display = "none";
	}
}

// Complication change, called by change in op_comp_none checkbox
function compChange(_obj, _id)
{
	if (!_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

// Complication change, called by change in op_comp_none checkbox
function compChange(_obj, _id)
{
	if (!_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

function lateClinicChange(_obj, _id)
{
	if (_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

function lateTheatreChange(_obj, _id)
{
	if (_obj.checked)
	{
		document.getElementById(_id).style.display = "block";
	}
	else
	{
		document.getElementById(_id).style.display = "none";
	}
}

// This function goes through the options for the given drop down box and removes them in preparation for a new set of values
function emptyList( box ) {
	// Set each option to null thus removing it
	while ( box.options.length ) box.options[0] = null;
}

// This function assigns new drop down options to the given drop down box from the list of lists specified
function fillList( box, arr ) {
	for ( var i = 0; i < arr.length; i++ ) {

		// Create a new drop down option with the display text and value from arr
		option = new Option( arr[i], arr[i] );

		// Add to the end of the existing options
		box.options[box.length] = option;
	}

	// Preselect option 0
	box.selectedIndex=0;
}

// Takes selection from a select dropdown and adds to a text area, with comma if appropriate
function addToTextarea(selectId, textareaId, fixed)
{
	// Get references to select and textarea
	var select = document.getElementById(selectId);
	var textArea = document.getElementById(textareaId);
	
	// Get value and text from select box
	var value = select.options[select.selectedIndex].value;
	var text = select.options[select.selectedIndex].text;

	// If text there already, make it lower case (as long as it has no caret) and add a comma before
	if (textArea.value.length > 0)
	{
		char = value.charAt(0);
		if (char != "^")
		{
			text = lcfirst(text);
		}		
		var text = "\n" + text;
	}
	
	// Add to textarea
	textArea.value = textArea.value + text;
	
	// Adjust height of target textarea
	if (typeof(fixed) == 'undefined')
	{
		adjustHeight(textareaId, 40);
	}
	
	// Reset select
	select.selectedIndex = 0;
}

// Makes automatically resizeable textarea. Style should be set with no scrollbars (overflow: hidden;)
function adjustHeight(id, defaultHeight)
{
	// Get reference to text area
	var textArea = document.getElementById(id);
	
	// Start by setting to default height
	textArea.style.height = defaultHeight + "px";
	
	// Now set new height according to content
	if (textArea.scrollHeight > textArea.clientHeight)
	{
		textArea.style.height = textArea.scrollHeight + "px";
	}
}


// Decapitalise first letter of a string
function lcfirst(str)
{
    var firstLetter = str.substr(0, 1);
    return firstLetter.toLowerCase() + str.substr(1);
}

// Set visibility of eccentric drop down
function setEccentric(_value, _id) {
	var div = document.getElementById(_id);
	if (_value == 'Eccentric') {
		div.style.display = 'block';
	}
	else {
		div.style.display = 'none';
	}
}

// Listener to handle synchronisation of eyes in HVT eyedraw
function hvtListener(_drawing) {
	this.drawing = _drawing;
	
	// Flag set when ready
	this.isReady = false;
	
	// Register this listener to receive notifications.
	this.drawing.registerForNotifications(this, 'callBack', ['ready', 'parameterChanged']);
	
	// Define function to receive notifications
	this.callBack = function (_messageArray) {
		switch (_messageArray['eventName'])
		{
		    // Eye draw image files all loaded
		    case 'ready':
				this.isReady = true;
				
		        // Get HVTs from drawing
		        var hvtArray = this.drawing.allDoodlesOfClass('HVT');
		        
		        // Set ranges according to eye ***TODO*** move code to doodle
		        for (var i = 0; i < hvtArray.length; i++) {
			        if (hvtArray[i].originX < 0) {
				        hvtArray[i].parameterValidationArray['originX']['range'] = new ED.Range(-350, -150);
			        }
			        else {
				        hvtArray[i].parameterValidationArray['originX']['range'] = new ED.Range(+150, +350);
				        hvtArray[i].originX = +250;
			        }
		        }
		        
		        // Repaint (value of originX has changed)
		        this.drawing.repaint();			
				
		        break;
		        
		    case 'parameterChanged':
		    
		    	if (this.isReady) {
			    	// Get selected doodle and drawing
			        var dood = _messageArray['object'].doodle;
			        var drawing = dood.drawing;
			        
			        // Get HVTs from drawing
			        var hvtArray = drawing.allDoodlesOfClass('HVT');
			        
			        // Assign right and left eyes
			        var rightEye;
			        var leftEye;
			        for (var i = 0; i < hvtArray.length; i++) {
				        if (hvtArray[i].originX < 0) {
					        rightEye = hvtArray[i];
				        }
				        else {
					        leftEye = hvtArray[i];
				        }
			        }
			        
			        // Apply syncronisation of right and left eyes
				    if (dood.className == "HVT")
			        {
			            // Right eye selected;
			            if (dood.originX < 0)
			            {
			                // Set other eye properties directly, without triggering a notification
			                leftEye.originX = -dood.originX;
			                leftEye.originY = -dood.originY;
			                leftEye.rotation = Math.PI/2 - dood.rotation;
			            }
			            // Left eye selected
			            else
			            {
			                // Set other eye properties directly, without triggering a notification
			                rightEye.originX = -dood.originX;
			                rightEye.originY = -dood.originY;
			                rightEye.rotation = Math.PI/2 - dood.rotation;
			                
			                // Update syncronised HTML elements
			                rightEye.updateDependentParameters('originX');
			                rightEye.updateDependentParameters('originY');
			                rightEye.updateDependentParameters('rotation');
			            }
			
			        }
	
				}
		    
		        break;
		}

	}
}

// Handles opening and closing of HVT area
function disclose(_id) {
	var el = document.getElementById(_id);
	var openId = _id + 'ImgOpen';
	var closeId = _id + 'ImgClose';
	
	if (el.style.display == 'none') {
		el.style.display = 'block';
		
		document.getElementById(openId).style.display = 'block';
		document.getElementById(closeId).style.display = 'none';
	}
	else
	{
		el.style.display = 'none';
		document.getElementById(openId).style.display = 'none';
		document.getElementById(closeId).style.display = 'block';
	}
}

jQuery(document).ready(function () {
    var togglers = jQuery('.section-toggle');
    var toggled = jQuery('.toggled-section');
    console.log(togglers, togglers.length);
    console.log(toggled, toggled.length);
    if (togglers.length != toggled.length) {
	console.log("An uneven numbers of togglers and toggleables were found.");
	return;
    }
    console.log('arse', togglers.length);
    for (var a=0; a < togglers.length; a++) {
	(function (b) {
	    jQuery(togglers.get(b)).click(function(i) {
		var jI = jQuery(i);
		console.log('b',b);
		var tgt = jQuery(toggled.get(b));
		console.log("tgt",tgt);
		if (tgt.hasClass('toggled-open')) {
		    tgt.slideUp().removeClass('toggled-open');
		    jI.removeClass('toggled-open');
		} else {
		    tgt.addClass('toggled-open').slideDown();
		    jI.addClass('toggled-open');
		}
	    });
	})(a);
    }
});

