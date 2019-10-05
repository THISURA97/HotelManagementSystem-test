<!DOCTYPE html>
<html>
<head>

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<table style="width:100%">

    <tr>
        <th>ID</th>
        <th>Event</th>
        <th>Cilent</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Date</th>
        <th>Time</th>
        <th>No of Guests</th>
        <th>Budget</th>
        <th>Hall No</th>
    </tr>

    @foreach ($events as $key => $event)
        <tr>
            <th>{{ $event->id }}</th>
            <th>{{ $event->eName }}</th>
            <th>{{ $event->client }}</th>
            <th>{{ $event->email }}</th>
            <th>{{ $event->contact }}</th>
            <th>{{ $event->date }}</th>
            <th>{{ $event->time }}</th>
            <th>{{ $event->noOfGuest }}</th>
            <th>{{ $event->budget }}</th>
            <th>{{ $event->hallNo }}</th>
        </tr>
    @endforeach
</table>

</html>