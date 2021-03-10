<p>First Name : {{$emaildetails['firstname']}}</p>
<p>Last Name : {{$emaildetails['lastname']}}</p>
<p>Email : {{$emaildetails['email']}}</p>
<p>Phone Number : {{$emaildetails['phonenumber']}}</p>
<p>Pickup : {{$emaildetails['pickup']}}</p>
<p>Drop off : {{$emaildetails['dropoff']}}</p>
<p>Miles : {{$emaildetails['miles']}}</p>
<p>Van Name : {{$emaildetails['vanname']}}</p>
<p>Price : GBP {{$emaildetails['price']}}</p>
<p>Extra Help : {{$emaildetails['extrahelp']}}</p>
<p>Inventry : {{$emaildetails['inventry']}}</p>
<p>Passenger : {{$emaildetails['passenger']}}</p>
<p>Requirements :  {{$emaildetails['requirement']}}</p>
<p>PickUp Floor : {{$emaildetails['pikuppart']}}</p>
<p>Pick Up Left : {{$emaildetails['pickupleft']}}</p>
<p>Drop off Floor: {{$emaildetails['dropoffpart']}}</p>
<p>Drop of Left: {{$emaildetails['dropofleft']}}</p>
<p>Date Time: {{date('Y-m-d H:i:s',strtotime($emaildetails['datetime']))}}</p>
