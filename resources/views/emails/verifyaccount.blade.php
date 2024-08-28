
<h1>Contact: {{$account->name}}</h1>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laboriosam. Voluptatibus harum esse modi at quis debitis, quos corporis laudantium tenetur labore. Culpa, non sint. Voluptatem quos inventore modi maxime!</p>

<p class="btn btn-primary">
    <a href="{{route('account.verify',$account->email)}}">Click here verify your account</a>
</p>