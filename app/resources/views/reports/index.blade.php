<h1>Reports</h1>

<table border="1">
    <th>    
        <th>ID</th>
        <th>Year</th>
        <th>Month</th>
        <th>Internal Attendance</th>
    </th>

    @foreach($reports as $report)

        <tr>
            <td>({$report->id})</td>
            <td>({$report->year})</td>
            <td>({$report->month})</td>
            <td>({$report->internal_attendance})</td>
        </tr>
    @endforeach
</table>