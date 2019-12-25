<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pick up Department</title>
</head>
<body>
<p>
   <img style="width:50%" src="http://pngimg.com/uploads/mercedes/mercedes_PNG1903.png">
</p>
<p>
    Lorem Ipsum is simply dummy text of the printing and
    typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown
    printer took a galley of type and scrambled it to make a
    type specimen book. It has survived not only five centuries,
    but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s
    with the release of Letraset sheets containing Lorem
    Ipsum passages, and more recently with desktop publishing
    software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<ul>

@foreach($cars as $car)
    <li>{{$car->title}}</li>
    @endforeach
</ul>
    <title>Pick Up Department</title>
</head>
<body>
<h1>Pick up Department</h1>
<p>
    <img src="https://www.alfaromeousa.com/content/alfausa/en/jcr:content/social-image.img.jpg/1568836317227.jpg">
</p>
<p>
    Lorem Ipsum
    "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
    "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
    What is Lorem Ipsum?
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    Why do we use it?
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infan
</p>

<ul>
@foreach($cars as $car)
    <li>{{$car->title}}</li>
@endforeach
</ul>

</body>
</html>
