@extends('employeesidebar')
@section('content')
    <form action={{ route('keep') }} method="post">
        @csrf
        <h3 class="text-center">New or Change Request Form</h3>
        <h4>1. Change Requestor:</h4>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="date_submit">Date Submitted:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_submit" name="date_submit">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="company">Company:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="company" name="company">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="department">Department:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="department" name="department">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label" for="type">Change Type:</label>
            </div>
            <div class="col-md-10">
                <label class="radio-inline">
                    <input type="radio" value="New Requirement" name="type">New Requirement
                </label>
                <label class="radio-inline">
                    <input type="radio" value="Requirement Change" name="type">Requirement Change
                </label>
                <label class="radio-inline">
                    <input type="radio" value="Other" name="type">Other
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label" for="priority">Priority:</label>
            </div>
            <div class="col-md-3">
                <label class="radio-inline">
                    <input type="radio" value="Urgent" name="priority">Urgent
                </label>
                <label class="radio-inline">
                    <input type="radio" value="Routine" name="priority">Routine
                </label>
            </div>
            <label class="control-label col-sm-2" for="date_require">Date Required:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="date_require" name="date_require">
            </div>
        </div>
        <h4>2. Change Description:</h4>
        <h5>(Detail functional and/or technical information. Use attachment if necessary.)</h5>
        <div class="form-group">
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>
        <h4>3. Technical Evaluation:</h4>
        <h5>(To be completed by IT team. Use attachment if necessary.)</h5>
        <div class="form-group">
            <label for="scope">Scope Affected:</label>
            <textarea type="text" class="form-control" id="scope" name="scope"></textarea>
        </div>
        <h4>4. Time Estimates:</h4>
        <h5>(To be completed by IT team. Use attachment if necessary.)</h5>
        <div class="row">
            <div class="col-md-2">
                <p>Stage</p>
            </div>
            <div class="col-md-3">
                <p>Est. Time</p>
            </div>
            <div class="col-md-7">
                <p>Remarks</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <b>Analysis/Design:</b>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" id="design_time" name="design_time">
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="design_remark" name="design_remark">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <b>Testing:</b>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" id="test_time" name="test_time">
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="test_remark" name="test_remark">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <b>Acceptance:</b>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" id="accept_time" name="accept_time">
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="accept_remark" name="accept_remark">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <b>Total Hours:</b>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" id="total_time" name="total_time">
            </div>
            <div class="col-md-7">
                <input type="text" class="form-control" id="total_remark" name="total_remark">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <b>Impact Analysis:</b>
            </div>
            <div class="col-md-3">
                <label class="radio-inline">
                    <input type="radio" value="Yes" name="impact">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" value="No" name="impact">No
                </label>
            </div>
            <div class="col-md-7">
                <p>(If yes, include impact on technical performance, resource, schedule, etc.)</p>
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
