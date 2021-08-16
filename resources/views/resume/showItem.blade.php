<h1>Resume of {{ $resume->user->username }}</h1>
<h2>NAME: {{ $resume->name }}</h2>
<h2>DATE OF BIRTH: {{ $resume->dob }}</h2>
<h2>GENDER: {{ ($resume->gender==0)? 'M' : 'F' }}</h2>
<h2>NATIONALITY: {{ $resume->nationality }}</h2>
<h2>ADDRESS: {{ $resume->address }}</h2>
<h2>PHONE: {{ $resume->phone }}</h2>
<h2>EMAIL: {{ $resume->email }}</h2>
<h2>WEBSITE: {{ $resume->website }}</h2>
<h2>SUMMARY: {{ $resume->summary }}</h2>
<h2>EDUCATION: {{ $resume->education }}</h2>
<h2>EXPERIENCE: {{ $resume->experience }}</h2>
<br><br>
