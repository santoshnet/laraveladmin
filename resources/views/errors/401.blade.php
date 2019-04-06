{{-- \resources\views\errors\401.blade.php --}}
@extends('layouts.app')
<link href='//fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<style type="text/css">
body{
	font-family: 'Courgette', cursive;
}
body{
	background:#f3f3e1;
}	
.wrap{
	margin:0 auto;
	width:100%;
}
.logo{
	margin-top:50px;
}	
.logo h1{
	font-size:200px;
	color:#8F8E8C;
	text-align:center;
	margin-bottom:1px;
	text-shadow:1px 1px 6px #fff;
}	
.logo p{
	color:rgb(228, 146, 162);
	font-size:20px;
	margin-top:1px;
	text-align:center;
}	
.logo p span{
	color:lightgreen;
}	
.sub a{
	color:white;
	background:#8F8E8C;
	text-decoration:none;
	padding:7px 120px;
	font-size:13px;
	font-family: arial, serif;
	font-weight:bold;
	-webkit-border-radius:3em;
	-moz-border-radius:.1em;
	-border-radius:.1em;
}	
.footer{
	color:#8F8E8C;
	position:absolute;
	right:10px;
	bottom:10px;
}	
.footer a{
	color:rgb(228, 146, 162);
}	
@media screen and (max-width: 1024px){
	.logo h1 {
    font-size: 180px;
}
}
@media screen and (max-width: 991px){
	.logo h1 {
		font-size: 170px;
	}
}
@media screen and (max-width: 900px){
	.logo h1 {
		font-size: 160px;
		margin-top: 130px;
	}
}
@media screen and (max-width: 800px){
	.logo h1 {
		font-size: 140px;
		margin-top: 135px;
	}
}
@media screen and (max-width: 768px){
	.logo h1 {
		font-size: 135px;
	}
	.logo p {
        font-size: 18px;
	}
}
@media screen and (max-width: 667px){
	.logo h1 {
		font-size: 130px;
		margin-top: 150px;
	}
}	
@media screen and (max-width: 640px){
	.logo h1 {
    	font-size: 126px;
	}
	.footer {
       font-size: 15px
	}
}
@media screen and (max-width: 600px){
	.logo h1 {
		font-size: 120px;
	}
}

@media screen and (max-width: 568px){
	.logo h1 {
		font-size: 110px;
	}
	.footer {
		font-size: 14px;
	}
}
@media screen and (max-width: 480px){
	.logo h1 {
		font-size: 105px;
		margin-top: 165px;
	}
}
@media screen and (max-width: 414px){ 
	.logo h1 {
		font-size: 100px;
		margin-top: 180px;
	}
}
@media screen and (max-width: 384px){
	.logo h1 {
   		 font-size: 96px;
	}
	.logo p {
		font-size: 17px;
	}
	.footer {
		font-size: 13px;
	}
}
@media screen and (max-width: 375px){
	.logo h1 {
		font-size: 90px;
	}
	.footer {
		font-size: 13px;
		line-height: 1.8;
		text-align: center;
		padding: 1em;
	}
}
@media screen and (max-width: 320px){
	.logo h1 {
		font-size: 84px;
	}
	.logo p {
		font-size: 16px;
	}
}
/* -- //Responsive code -- */
</style>

@section('content')
    <div class="wrap">
	   <div class="logo">
	   <h1>401</h1>
	    <p>Sorry  - Access Denied</p>
  	      <div class="sub">
	        <p><a href="{{ URL::to('/') }}">Back</a></p>
	      </div>
        </div>
	</div>
	

@endsection