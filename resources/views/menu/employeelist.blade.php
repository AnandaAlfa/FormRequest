@extends('employeesidebar')
@section('content')
<br>
	<table border="1">
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Date Submitted</th>
			<th>Company</th>
			<th>Department</th>
            <th>Change Type</th>
			<th>Priority</th>
            <th>Date Required</th>
			<th>Change Description</th>
			<th>Scope Affected</th>
			<th>Analysis/Design Est. Time</th>
            <th>Analysis/Design Remarks</th>
			<th>Testing Est. Time</th>
			<th>Testing Remarks</th>
			<th>Acceptance Est. Time</th>
			<th>Acceptance Remarks</th>
            <th>Total Hours Est. Time</th>
			<th>Total Hours Remarks</th>
			<th>Impact Analysis Needed</th>
            <th>Status</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->user_id }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->date_submit }}</td>
            <td>{{ $p->company }}</td>
			<td>{{ $p->department }}</td>
            <td>{{ $p->type }}</td>
			<td>{{ $p->priority }}</td>
			<td>{{ $p->date_require }}</td>
			<td>{{ $p->description }}</td>
            <td>{{ $p->scope }}</td>
			<td>{{ $p->design_time }}</td>
			<td>{{ $p->design_remark }}</td>
			<td>{{ $p->test_time }}</td>
            <td>{{ $p->test_remark }}</td>
			<td>{{ $p->accept_time }}</td>
			<td>{{ $p->accept_remark }}</td>
			<td>{{ $p->total_time }}</td>
            <td>{{ $p->total_remark }}</td>
			<td>{{ $p->impact }}</td>
            <td>{{ $p->status }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
@endsection
