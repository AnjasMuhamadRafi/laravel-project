<div style="font-family: Arial, sans-serif;">
    <h2>Contact Form Message</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Company:</strong> {{ $data['company'] }}</p>
    <p><strong>Service:</strong> {{ $data['service'] }}</p>
    <hr>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</div>
