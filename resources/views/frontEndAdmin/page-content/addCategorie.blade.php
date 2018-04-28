@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
@endsection()
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Basic Form Elements</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="forms-basic.html#">Home</a></li>
				<li class="breadcrumb-item"><a href="forms-basic.html#">Forms</a></li>
				<li class="breadcrumb-item active">Basic Form Elements</li>
			</ol>
			<div class="box box-block bg-white">
				<h5>Form controls</h5>
				<p class="font-90 text-muted mb-1">Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleSelect1">Example select</label>
						<select class="form-control" id="exampleSelect1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Example multiple select</label>
						<select multiple class="form-control" id="exampleSelect2">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Example textarea</label>
						<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
						<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
					</div>
					<fieldset class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
								Option one is this and that&mdash;be sure to include why it's great
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								Option two can be something else and selecting it will deselect option one
							</label>
						</div>
						<div class="radio disabled">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
								Option three is disabled
							</label>
						</div>
					</fieldset>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Check me out
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Textual inputs</h5>
				<p>Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
				<div class="form-group row">
					<label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-search-input" class="col-xs-2 col-form-label">Search</label>
					<div class="col-xs-10">
						<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
					<div class="col-xs-10">
						<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
					<div class="col-xs-10">
						<input class="form-control" type="url" value="http://getbootstrap.com" id="example-url-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
					<div class="col-xs-10">
						<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
					<div class="col-xs-10">
						<input class="form-control" type="password" value="hunter2" id="example-password-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
					<div class="col-xs-10">
						<input class="form-control" type="number" value="42" id="example-number-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
					<div class="col-xs-10">
						<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
					<div class="col-xs-10">
						<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
					<div class="col-xs-10">
						<input class="form-control" type="month" value="2011-08" id="example-month-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
					<div class="col-xs-10">
						<input class="form-control" type="week" value="2011-W33" id="example-week-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
					<div class="col-xs-10">
						<input class="form-control" type="time" value="13:45:00" id="example-time-input">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
					<div class="col-xs-10">
						<input class="form-control" type="color" value="#563d7c" id="example-color-input">
					</div>
				</div>
			</div>
			<div class="box box-block bg-white">
				<h5>Form groups</h5>
				<p class="font-90 text-muted mb-1">The <code>.form-group</code> class is the easiest way to add some structure to forms. Its only purpose is to provide <code>margin-bottom</code> around a label and control pairing. As a bonus, since it’s a class you can use it with <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or nearly any other element.</p>
				<form>
					<div class="form-group">
						<label for="formGroupExampleInput">Example label</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Another label</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
					</div>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Inline forms</h5>
				<p class="font-90 text-muted mb-1">Use the <code>.form-inline</code> class to to display a series of labels, form controls, and buttons on a single horizontal row.</p>
				<h6>Visible labels</h6>
				<form class="form-inline mb-1">
					<div class="form-group">
						<label for="exampleInputName2">Name</label>
						<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
					</div>
					<button type="submit" class="btn btn-primary">Send invitation</button>
				</form>
				<h6>Hidden labels</h6>
				<form class="form-inline mb-1">
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail3">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword3">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
				<form class="form-inline">
					<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Transfer cash</button>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Grid</h5>
				<p class="font-90 text-muted mb-1">For more structured form layouts, you can utilize Bootstrap’s predefined grid classes or mixins. Add the <code>.row</code> class to form groups and use the <code>.col-*</code> classes to specify the width of your labels and controls.</p>
				<form>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						</div>
					</div>
					<fieldset class="form-group row">
						<legend class="col-form-legend col-sm-2">Radios</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
									Option one is this and that&mdash;be sure to include why it's great
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
									Option two can be something else and selecting it will deselect option one
								</label>
							</div>
							<div class="form-check disabled">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
									Option three is disabled
								</label>
							</div>
						</div>
					</fieldset>
					<div class="form-group row">
						<label class="col-sm-2">Checkbox</label>
						<div class="col-sm-10">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> Check me out
								</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-sm-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Checkboxes and radios</h5>
				<p class="font-90 text-muted mb-1">Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
				<h6>Default (stacked)</h6>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" value="">
						Option one is this and that&mdash;be sure to include why it's great
					</label>
				</div>
				<div class="form-check disabled">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" value="" disabled>
						Option two is disabled
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
						Option one is this and that&mdash;be sure to include why it's great
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
						Option two can be something else and selecting it will deselect option one
					</label>
				</div>
				<div class="form-check disabled">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
						Option three is disabled
					</label>
				</div>
				<h6>Inline</h6>
				<label class="form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> 1
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> 2
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> 3
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
				</label>
				<label class="form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
				</label>
			</div>
			<div class="box box-block bg-white">
				<h5>Static controls</h5>
				<p class="font-90 text-muted mb-1">When you need to place plain text next to a form label within a form, use the <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>
				<form class="mb-1">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<p class="form-control-static">email@example.com</p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
					</div>
				</form>
				<form class="form-inline">
					<div class="form-group">
						<label class="sr-only">Email</label>
						<p class="form-control-static">email@example.com</p>
					</div>
					<div class="form-group">
						<label for="inputPassword2" class="sr-only">Password</label>
						<input type="password" class="form-control" id="inputPassword2" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Confirm identity</button>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Disabled states</h5>
				<p class="font-90 text-muted mb-1">Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
				<form>
					<fieldset disabled>
						<div class="form-group">
							<label for="disabledTextInput">Disabled input</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
						</div>
						<div class="form-group">
							<label for="disabledSelect">Disabled select menu</label>
							<select id="disabledSelect" class="form-control">
								<option>Disabled select</option>
							</select>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Can't check this
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</fieldset>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Readonly inputs</h5>
				<p class="font-90 text-muted mb-1">Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>
				<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
			</div>
			<div class="box box-block bg-white">
				<h5>Control sizing</h5>
				<p class="font-90 text-muted mb-1">Set heights using classes like <code>.form-control-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
				<input class="form-control form-control-lg mb-1" type="text" placeholder=".form-control-lg">
				<input class="form-control mb-1" type="text" placeholder="Default input">
				<input class="form-control form-control-sm mb-1" type="text" placeholder=".form-control-sm">
				<select class="form-control form-control-lg mb-1">
					<option>Large select</option>
				</select>
				<select class="form-control mb-1">
					<option>Default select</option>
				</select>
				<select class="form-control form-control-sm mb-1">
					<option>Small select</option>
				</select>
				<h6>Column sizing</h6>
				<div class="row">
					<div class="col-xs-2">
						<input type="text" class="form-control" placeholder=".col-xs-2">
					</div>
					<div class="col-xs-3">
						<input type="text" class="form-control" placeholder=".col-xs-3">
					</div>
					<div class="col-xs-4">
						<input type="text" class="form-control" placeholder=".col-xs-4">
					</div>
				</div>
			</div>
			<div class="box box-block bg-white">
				<h5>Help text</h5>
				<p>Block-level help text in forms can be created using <code>.form-text</code> (previously known as <code>.help-block</code> in v3). Inline help text can be flexibly implemented using any inline HTML element and utility classes like <code>.text-muted</code>.</p>
				<label for="inputPassword5">Password</label>
				<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
				<p id="passwordHelpBlock" class="form-text text-muted">
					Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</p>
				<form class="form-inline">
					<div class="form-group">
						<label for="inputPassword4">Password</label>
						<input type="password" id="inputPassword4" class="form-control" aria-describedby="passwordHelpInline">
						<small id="passwordHelpInline" class="text-muted">
							Must be 8-20 characters long.
						</small>
					</div>
				</form>
			</div>
			<div class="box box-block bg-white">
				<h5>Validation</h5>
				<p class="font-90 text-muted mb-1">Bootstrap includes validation styles for danger, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-danger</code>, or <code>.has-success</code> to the parent element. Any <code>.form-control-label</code>, <code>.form-control</code>, and <code>.text-help</code> within that element will receive the validation styles.</p>
				<div class="form-group has-success">
					<label class="col-form-label" for="inputSuccess1">Input with success</label>
					<input type="text" class="form-control form-control-success" id="inputSuccess1">
					<div class="form-control-feedback">Success! You've done it.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
				<div class="form-group has-warning">
					<label class="col-form-label" for="inputWarning1">Input with warning</label>
					<input type="text" class="form-control form-control-warning" id="inputWarning1">
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
				<div class="form-group has-danger">
					<label class="col-form-label" for="inputDanger1">Input with danger</label>
					<input type="text" class="form-control form-control-danger" id="inputDanger1">
					<div class="form-control-feedback">Shit, that username's taken. Try another?</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
				<div class="checkbox has-success">
					<label>
						<input type="checkbox" id="checkboxSuccess" value="option1">
						Checkbox with success
					</label>
				</div>
				<div class="checkbox has-warning">
					<label>
						<input type="checkbox" id="checkboxWarning" value="option1">
						Checkbox with warning
					</label>
				</div>
				<div class="checkbox has-danger">
					<label>
						<input type="checkbox" id="checkboxDanger" value="option1">
						Checkbox with danger
					</label>
				</div>
			</div>
			<div class="box box-block bg-white mb-0">
				<h5>Custom forms</h5>
				<p class="font-90 text-muted mb-1">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
				<h6>Checkboxes</h6>
				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Check this custom checkbox</span>
				</label>
				<h6 class="mt-2">Radios</h6>
				<label class="custom-control custom-radio">
					<input id="radio1" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Toggle this custom radio</span>
				</label>
				<label class="custom-control custom-radio">
					<input id="radio2" name="radio" type="radio" class="custom-control-input">
					<span class="custom-control-indicator"></span>
					<span class="custom-control-description">Or toggle this other custom radio</span>
				</label>
				<h6 class="mt-2">Select menu</h6>
				<select class="custom-select">
					<option selected>Open this select menu</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
				<h6 class="mt-2">File browser</h6>
				<label class="custom-file">
					<input type="file" id="file" class="custom-file-input">
					<span class="custom-file-control"></span>
				</label>
			</div>
		</div>
	</div>
@endsection()
@section('js')
	<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/switchery/dist/switchery.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
@endsection