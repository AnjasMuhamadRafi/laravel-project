<h2>New Job Application</h2>
<p><strong>Name:</strong> {{ $data['fullName'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Position:</strong> {{ $data['position'] ?? '-' }}</p>
<p><strong>Experience:</strong> {{ $data['experience'] ?? '-' }}</p>
<p><strong>Cover Letter:</strong></p>
<p>{{ $data['coverLetter'] }}</p>
<p>Resume/CV terlampir pada email ini.</p>
