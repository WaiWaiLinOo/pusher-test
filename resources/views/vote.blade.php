<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vote</title>
  <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
  <h1>Vote result: {{ $vote->count }}</h1>
  <form action={{ url()->current() }} method="post">
    @csrf
    <button type="submit">Vote</button>
  </form>

  <script>
    Echo.channel('vote-channel').listen("VoteEvent", (e) => {
      location.reload();
    });
  </script>
</body>

</html>