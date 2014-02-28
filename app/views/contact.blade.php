@extends('layouts.scaffold')

@section('main')


<div id="content">

	<div class="block-main">

		<div class="container"> 

			<div class="row">

				<div class="span12">
					<h1>Send an email</h1>
					

					<form class="form-horizontal" method="POST">
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input type="text" id="name" name="name" class="span4">
    </div>
  </div>
  <div class="control-group">
  <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email" name="email" class="span4">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="type">Contact Reason</label>
    <div class="controls">
      <select name="reason" id="reason" class="span4">
      	<option>Site Question</option>
      	<option>Inaccurate Information</option>
      	<option>Dating Requests</option>
      	<option>Television Opportunities</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="type">Message</label>
    <div class="controls">
      <textarea name="message" id="message"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">

      <label class="control-">
        
      </label>
      <button type="submit" class="btn">Send Message</button>
    </div>
  </div>
</form>
					

				</div>
			</div>

		</div>

	</div>

</div>

@stop
