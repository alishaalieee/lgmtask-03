
<nav class="navsbar" style="position:fixed;top:0;">
<div class="navs-items">
<ul>
<l1><a href="../views/home.php" class="item_link1">Home</a></l1> 
<l1><a href="#Aboutus" class="item_link1">About</a></l1> 
<l1><a href="#contact" class="item_link1">Contact Us</a></l1>
</ul>
</div>
<div class="right">
<l1><a href="#" id="login" class="item_link" style="font-color:red;">Login</a></l1>

</div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script>
$("#login").click(function(){

$('.card').html("<div class='cardheader' style='display:flex; justify-content:center;background-color:#80b3ff; color:#cc0000;padding:7px;'>"+
                '<span>Sign in</span></div>'+
                '<form action="dregister.php" method="GET">'+            
                '<div class="card-body">'+
               
                '<div class="form-control">'+
                '<label class="form_label" for="name">Email</label>'+
                '<input class="form_input" type="text" name="email"></input>'+
                '</div>'+

                '<div class="form-control">'+
                '<label class="form_label" for="name">Password</label>'+
                '<input class="form_input" type="password" name="password"></input>'+
                '</div>'+
                '</div>'+
                '<div class="btn" style="padding:10px;background-color:black;color:white; display:flex; justify-content:center;">'+
                '<button class="btn" type="submit" name="login" style="font-size:22px;padding:5px;">Login Now</button>'+
'</div>'+
'</form>'
);

});
</script>


