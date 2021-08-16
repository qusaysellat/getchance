<br>
<h1> CONTENT: {{ $message->content }}</h1>
<h2>SENT AT: {{ $message->created_at }}</h2>
<h2> READ? {{ ($message->read == 1)? 'Yes at: '.$message->updated_at : 'Not Yet' }}</h2>
<br>
