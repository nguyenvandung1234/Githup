<div style="width:600px;background-color:antiquewhite;color:black;margin: 0 auto;padding:15px 20px;border:2px solid green">
    <h3>{{$customer->name}}</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum, corporis odit natus incidunt inventore. Quod consequuntur dignissimos id animi porro accusantium quis qui. Asperiores non delectus totam itaque molestiae!</p>
    <p class="btn btn-primary"><a href="{{route('account.reset_password',$token)}}" style="display:inline-block;color:white;background-color:lightgreen">Click here get to new password</a></p>
</div>