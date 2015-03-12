@extends('register.app')

@section('content')

    <!-- BEGIN PAGE CONTENT-->
    <h3 class="page-title register-title">
        New Application <small>for renting a property</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box" id="form_wizard_1">
                <div class="portlet-body form">
					{!! Form::model($personalInformation,array('method'=>'post','class'=> 'form-horizontal','url' => route('register.register.postRegister'), 'id'=>'submit_form')) !!}
					    <input type="hidden" name="user_id" value="{{Auth::id()}}">
						<input type="hidden" name="property_id" value="1">
                        <div class="form-wizard">
                            <div class="form-body">
                                <ul class="nav nav-pills nav-justified steps">
                                    <li>
                                        <a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Personal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Employment</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Vehicles </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
												<i class="fa fa-check"></i> General Information </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success">
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="alert alert-danger display-none">
                                        <button class="close" data-dismiss="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-none">
                                        <button class="close" data-dismiss="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="tab-pane active" id="tab1">
										<h3 class="block">Personal Information</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
												   <label class="control-label col-md-4">First Name<span class="required">
																* </span>
																</label>

													<div class="col-md-6">
														{!!Form::text('first_name', null, array('class'=>'form-control', 'name'=>'personal-information[first_name]'))!!}
																	<span class="help-block">
																	Provide your username </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Middle Name <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('middle_name', null, array('class'=>'form-control', 'name'=>'personal-information[middle_name]'))!!}
																	<span class="help-block">
																	Provide your middle name. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Last Name <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('last_name', null, array('class'=>'form-control', 'name'=>'personal-information[last_name]'))!!}
																	<span class="help-block">
																	Provide your last name. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Email <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('email', null, array('class'=>'form-control', 'name'=>'personal-information[email]','id'=>'email'))!!}
																	<span class="help-block" id="email-exist">
																	Provide your email address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Birth Date <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('dob', null, array('class'=>'form-control', 'name'=>'personal-information[dob]'))!!}
																	<span class="help-block">
																	Provide birth date.</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Social Security <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('social_security', null, array('class'=>'form-control', 'name'=>'personal-information[social_security]'))!!}
																	<span class="help-block">
																	Provide Social Security.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Driver Licence <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('driver_licence', null, array('class'=>'form-control', 'name'=>'personal-information[driver_licence]'))!!}
																	<span class="help-block">
																	Provide Driver Licence.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Any Other Name you used in Past <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('past_name', null, array('class'=>'form-control', 'name'=>'personal-information[past_name]'))!!}
																	<span class="help-block">
																	Provide Past Name.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Home Phone <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('home_phone', null, array('class'=>'form-control', 'name'=>'personal-information[home_phone]'))!!}
																	<span class="help-block">
																	Provide Home Phone.</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Cell Phone <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('cell_phone', null, array('class'=>'form-control', 'name'=>'personal-information[cell_phone]'))!!}
																	<span class="help-block">
																	Provide Cell Phone.</span>
													</div>
												</div>
											</div>
										</div>
										<h3 class="block">Occupants Information</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">All Other Perposel Occupants <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('occupant_name', null, array('class'=>'form-control', 'name'=>'occupants-information[occupant_name]'))!!}
																	<span class="help-block">
																	Provide your occupant name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Occupant DOB <span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('occupant_dob', null, array('class'=>'form-control', 'name'=>'occupants-information[occupant_dob]'))!!}
																	<span class="help-block">
																	Provide your occupant birth date </span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Occupant Relationship<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::text('occupant_relationship', null, array('class'=>'form-control', 'name'=>'occupants-information[occupant_relationship]'))!!}
																	<span class="help-block">
																	Provide your occupant occupant relationship</span>
													</div>
												</div>
											</div>
										</div>
										<h3 class="block">Residence History</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Street Address<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::textarea('street_address', null, array('class'=>'form-control', 'name'=>'residence-history[street_address]', 'rows'=>'5'))!!}
																	<span class="help-block">
																	Provide your street address</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-4">City<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::select('residence-history[city]', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel'),));!!}
																	<span class="help-block">
																	Provide city</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Last Rent Amount Paid<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('last_amount_paid', null, array('class'=>'form-control', 'name'=>'residence-history[last_amount_paid]'))!!}
																	<span class="help-block">
																	Provide Last Rent Amount</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Owner<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('owner', null, array('class'=>'form-control', 'name'=>'residence-history[owner]'))!!}
																	<span class="help-block">
																	Provide owner</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Phone No<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('owner', null, array('class'=>'form-control', 'name'=>'residence-history[owner]'))!!}
																	<span class="help-block">
																	Provide owner</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Reason for leaving.<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::textarea('reason_for_leaving', null, array('class'=>'form-control', 'name'=>'residence-history[reason_for_leaving]'))!!}
																	<span class="help-block">
																	Provide Reason for leaving</span>
													</div>
												</div>
												
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::select('residence-history[state]', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel'),));!!}
																	<span class="help-block">
																	Provide State</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-4">Is/Was pent paid in full<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 <input type="radio" class="form-control font_input" name="residence-history[rent_paid_full]" value="yes">
														 <span style="color:red;">Yes</span>
														 <input type="radio" class="form-control font_input" name="residence-history[rent_paid_full]" value="no">
														 <span style="color:red;">No</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Did you give notice<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 <input type="radio" class="form-control font_input" name="residence-history[give_notice]" value="yes">
														 <span style="color:red;">Yes</span>
														 <input type="radio" class="form-control font_input" name="residence-history[give_notice]" value="no">
														 <span style="color:red;">No</span>
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Where you asked to move<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('asked_to_move', null, array('class'=>'form-control', 'name'=>'residence-history[asked_to_move]'))!!}
																	<span class="help-block">
																	Provide asked to move</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Name in which your utilities are now billed<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('utilities', null, array('class'=>'form-control', 'name'=>'residence-history[utilities]'))!!}
																	<span class="help-block">
																	Provide asked to move</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Date of residency From<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('residence_from', null, array('class'=>'form-control', 'name'=>'residence-history[residence_from]'))!!}
																	<span class="help-block">
																	Provide asked to move</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Date of residency To<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('residence_to', null, array('class'=>'form-control', 'name'=>'residence-history[residence_to]'))!!}
																	<span class="help-block">
																	Provide asked to move</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Residence State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::select('residence-history[residence_state]', array('Current'=>'Current','Previous'=>'Previous','Prior'=>'Prior'));!!}
																	<span class="help-block">
																	Provide Residence State</span>
													</div>
												</div>
											</div>
										</div>
											
											
										
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <h3 class="block">Employment History</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Company<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('company', null, array('class'=>'form-control', 'name'=>'employment-history[company]'))!!}
																	<span class="help-block">
																	Provide company</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Street Address<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('address', null, array('class'=>'form-control', 'name'=>'employment-history[address]'))!!}
																	<span class="help-block">
																	Provide address</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Phone No<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('phone_no', null, array('class'=>'form-control', 'name'=>'employment-history[phone_no]'))!!}
																	<span class="help-block">
																	Provide Phone No</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Occupation<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('occupation', null, array('class'=>'form-control', 'name'=>'employment-history[occupation]'))!!}
																	<span class="help-block">
																	Provide Occupation</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Name of Supervisor<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('supervisor', null, array('class'=>'form-control', 'name'=>'employment-history[supervisor]'))!!}
																	<span class="help-block">
																	Provide Supervisor</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Monthly Gross Pay<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('gross_pay', null, array('class'=>'form-control', 'name'=>'employment-history[gross_pay]'))!!}
																	<span class="help-block">
																	Provide Monthly Gross Pay</span>
													</div>
												</div>
											
												<div class="form-group">
													<label class="control-label col-md-4">Date of Employment From<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('employment_from', null, array('class'=>'form-control', 'name'=>'employment-history[employment_from]'))!!}
																	<span class="help-block">
																	Date of Employment From</span>
													</div>
												</div>
											
												<div class="form-group">
													<label class="control-label col-md-4">Date of employment To<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('employment_to', null, array('class'=>'form-control', 'name'=>'employment-history[employment_to]'))!!}
																	<span class="help-block">
																	Date of Employment From</span>
													</div>
												</div>
											
												<div class="form-group">
													<label class="control-label col-md-4">Employment State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														  {!!Form::select('employment-history[employment_state]', array('Current'=>'Current','Previous'=>'Previous','Prior'=>'Prior'));!!}
																	<span class="help-block">
																	Date of Employment From</span>
													</div>
												</div>
											</div>
										</div>
										<!-- start of credit history -->
										<h3 class="block">Credit History</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Bank/Institution Name<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('bank_name', null, array('class'=>'form-control', 'name'=>'credit-history[bank_name]'))!!}
																	<span class="help-block">
																	Provide company</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Credit State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::select('credit-history[credit_state]', array('Saving Account'=>'Saving Account','Checking Account'=>'Checking Account','Credit Card'=>'Credit Card','Auto Card'=>'Auto Card'));!!}
																	<span class="help-block">
																	Credit State</span>
													</div>
												</div>
												
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Balance On Deposit or Balance Owed<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('balance', null, array('class'=>'form-control', 'name'=>'credit-history[balance]'))!!}
																	<span class="help-block">
																	Provide Monthly Gross Pay</span>
													</div>
												</div>
											</div>
											
											
											
										</div>
										<!-- end of credit history -->
										
										
                                        
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <!-- start of vehicles history -->
										<h3 class="block">Vehicle History</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Make<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('make', null, array('class'=>'form-control', 'name'=>'vehicles[make]'))!!}
																	<span class="help-block">
																	Provide Make</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Color<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('color', null, array('class'=>'form-control', 'name'=>'vehicles[color]'))!!}
																	<span class="help-block">
																	Provide Color</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Licence<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('licence', null, array('class'=>'form-control', 'name'=>'vehicles[licence]'))!!}
																	<span class="help-block">
																	Provide Licence</span>
													</div>
												</div>
												
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Model<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('model', null, array('class'=>'form-control', 'name'=>'vehicles[model]'))!!}
																	<span class="help-block">
																	Provide Model</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Year<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('year', null, array('class'=>'form-control', 'name'=>'vehicles[year]'))!!}
																	<span class="help-block">
																	Provide Year</span>
													</div>
												</div>
											</div>
										</div>
										<!-- end of vehicles history -->
										
										<!-- start of references and emergency contacts -->
										<h3 class="block">References & Emergency Contacts</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Name<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('name', null, array('class'=>'form-control', 'name'=>'references[name]'))!!}
																	<span class="help-block">
																	Provide Name</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">City<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('city', null, array('class'=>'form-control', 'name'=>'references[city]'))!!}
																	<span class="help-block">
																	Provide City</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Zip Code<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('zip_code', null, array('class'=>'form-control', 'name'=>'references[zip_code]'))!!}
																	<span class="help-block">
																	Provide Zip Code</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Reference State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														{!!Form::select('references[reference_state]', array('Doctor'=>'Doctor','Lawyer'=>'Lawyer','Native'=>'Native'));!!}
																	<span class="help-block">
																	Provide Reference State</span>
													</div>
												</div>
												
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="control-label col-md-4">Street Address<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('address', null, array('class'=>'form-control', 'name'=>'vehicles[address]'))!!}
																	<span class="help-block">
																	Provide Street Address</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">State<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('state', null, array('class'=>'form-control', 'name'=>'references[state]'))!!}
																	<span class="help-block">
																	Provide State</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Contact<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('contact no', null, array('class'=>'form-control', 'name'=>'references[contact no]'))!!}
																	<span class="help-block">
																	Provide Contact</span>
													</div>
												</div>
											</div>
										</div>
										<!-- end of references and emergency contacts -->
										
                                        
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <h3 class="block">General Information</h3>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label class="control-label col-md-4">Have you ever served a late rent notice?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_1', null, array('class'=>'form-control', 'name'=>'general-information[question_1]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Do any of the people who would be living in the apartment smoke?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_2', null, array('class'=>'form-control', 'name'=>'general-information[question_2]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">How long do you think you would be txt from us ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_3', null, array('class'=>'form-control', 'name'=>'general-information[question_3]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Have you ever filed for bankruptcy if so when?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_4', null, array('class'=>'form-control', 'name'=>'general-information[question_4]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">When you would be able to move in ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_5', null, array('class'=>'form-control', 'name'=>'general-information[question_5]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Have you ever been convicted txt ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_6', null, array('class'=>'form-control', 'name'=>'general-information[question_6]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Have you ever been served txt notice if so when ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_7', null, array('class'=>'form-control', 'name'=>'general-information[question_7]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">How many pets do you have(list, type,breed, approx weight& age) ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_8', null, array('class'=>'form-control', 'name'=>'general-information[question_8]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Have you had any recurring problem with your current apartment or landlord if yes please explain:<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_9', null, array('class'=>'form-control', 'name'=>'general-information[question_9]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Why are you moving fom current address?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_10', null, array('class'=>'form-control', 'name'=>'general-information[question_10]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">List any verifiable source and amount of income you txt to have considered.<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_11', null, array('class'=>'form-control', 'name'=>'general-information[question_11]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">If you were late financial difficulties in the future and coud't come up with the messy to pay rent, do you know someone would loan you the money? If so provide the person's name address and phone # so that we can use them as a reference for you.<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_12', null, array('class'=>'form-control', 'name'=>'general-information[question_12]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Have you been a party to lawsuits in the past ? if you please explain Why ??<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_13', null, array('class'=>'form-control', 'name'=>'general-information[question_13]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">We may run a credit check and criminal background check , is there anything negative we will find that you want comment on ? ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_14', null, array('class'=>'form-control', 'name'=>'general-information[question_14]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">How did you hear about this apartment ?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_15', null, array('class'=>'form-control', 'name'=>'general-information[question_15]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Do you have email address we can reach you at?<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_16', null, array('class'=>'form-control', 'name'=>'general-information[question_16]'))!!}
																	
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Do you know anybody is looking for an apartment? please provide us their name and number,if you refer a friend and you each end up renting seperate apartment from us then we will pay you referral award.<span class="required">
																* </span>
													</label>
													<div class="col-md-6">
														 {!!Form::text('question_17', null, array('class'=>'form-control', 'name'=>'general-information[question_17]'))!!}
																	
													</div>
												</div>
											</div>
											
												
												
											
										</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="m-icon-swapleft"></i> Back </a>
                                        <a href="javascript:;" class="btn blue button-next">
                                            Continue <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                        <a href="javascript:;" class="btn green button-submit">
                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
	<!-- Login Model -->
	<div class="modal fade black-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<!-- The form is placed inside the body of modal -->
					<div class="row">
						<div class="col-sm-6">
							<h4 class="modal-header">New user</h4>
							<div class="btn green newuser-act">Sign Up</div>
						</div>
						<div class="col-sm-6">
							<h4 class="modal-header">Existing user</h4>
							{!! Form::open(array('route' => 'register.login','method' => 'POST' , 'class' => 'form-horizontal', 'id' =>'loginForm')) !!}
							<div class="form-group">
								<label class="col-xs-12 error-message"></label>
							</div>
								<div class="form-group">
									<label class="col-xs-3 control-label">Email</label>
									<div class="col-xs-9">
										<input type="email" required class="form-control" name="email" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-xs-3 control-label">Password</label>
									<div class="col-xs-9">
										<input type="password" required class="form-control" name="password" />
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-9 col-xs-offset-3">
										<button type="submit" class="btn login">Login</button>
									</div>
								</div>
							{!! Form::close()!!}
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
<!-- End Login Modal-->

<!-- Signin Model-->
	<div class="modal fade black-modal" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<!-- The form is placed inside the body of modal -->

							<h4 class="modal-header">Signup</h4>
							{!! Form::open(array('route' => 'register.signup','method' => 'POST' , 'class' => 'form-horizontal', 'id' =>'signupForm')) !!}
								<div class="form-group">
									<label class="col-xs-12 error-message"></label>
								</div>
								<div class="form-group">
									<label class="col-xs-4 control-label">Name</label>
									<div class="col-xs-8">
										<input type="text" required class="form-control" name="name" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-xs-4 control-label">Email</label>
									<div class="col-xs-8">
										<input type="email" required class="form-control" name="email" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-xs-4 control-label">Password</label>
									<div class="col-xs-8">
										<input type="password" required class="form-control" name="password" />
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-8 col-xs-offset-4">
										<button type="submit" class="btn login">Sign up</button>
									</div>
								</div>
							{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
<!-- Sign Model -->
<!-- Applicant Model-->
	<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<!-- The form is placed inside the body of modal -->

					<h4 class="modal-header">Load Previous Application</h4>
					<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Application No.</th>
								<th>Applicant</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="applicant-data">

						</tbody>

					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Applicant Model -->

@endsection
@section('page-script')
    <script>
        jQuery(document).ready(function() {
            jQuery('#email').blur(function() {
                var email = jQuery('#email').val();
                //var url = '{{route('register.register.getUserId')}}'+email;
                var url = '{{route('register.register.getUserId','charultyagi@newgenray.com')}}';
                var token = $('input[name="_token"]').val();
                $.ajax({
                    type: 'post',
                    url: url,
                    dataType: 'json',
                    data: {'_token':token},
                    success: function(data) {
                        if(data){
							$('#email-exist').css('color','red');
							$('#email-exist').text('This email address is already exist.Please login');
                        }else{
                            
                        }
                    }
                });
            });



            <!-- end page script -->
        });
/* Model Actions*/
		$(document).ready(function() {
			var application_url = "{{route('register.application.index')}}";
			@if(!Auth::check())
				$('#loginModal').modal('show');
			@endif
        	$('.newuser-act').on('click',function(){
				$('#signupModal').modal('show');
			});
			$('#loginForm').submit(function(e){
				e.preventDefault();

				$.post("{{route('register.login')}}", {
							'_token': $('#loginForm input[name="_token"]').val(),
							'email': $('#loginForm input[name="email"]').val(),
							'password': $('#loginForm input[name="password"]').val()
						}
				).done(function(data){
							if(data.status == 'success'){
								var html = '';
								$.each(data.data,function(i,val){
									html = '<tr><td>'+i+'</td><td>'+val+'</td><td><a href="'+application_url+'/'+i+'">Load</a></td></tr>';
								});
								$('.applicant-data').append(html);
								$('#loginModal').modal('hide');
								$('#signupModal').modal('hide');
								$('#applicationModal').modal('show');

							}
							else{
								$('#loginForm .error-message').text(data.message);
							}
						});
			});
			$('#signupModal').submit(function(e){
				e.preventDefault();

				$.post("{{route('register.signup')}}", {
							'_token': $('#signupForm input[name="_token"]').val(),
							'name': $('#signupForm input[name="name"]').val(),
							'email': $('#signupForm input[name="email"]').val(),
							'password': $('#signupForm input[name="password"]').val()
						}
				).done(function(data){
							if(data.status == 'success'){
								location.reload();
							}
							else{
								$('#signupForm .error-message').text(data.message);
							}
						});
			});


});
    </script>
    @endsection