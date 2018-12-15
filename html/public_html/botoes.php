<input type="checkbox" id="fav"/>
<label for="fav" id="favorite">
<i class="fas fa-heart"></i>
</label>

<input type="checkbox" id="like"/>
<label for="like" id="llike">
<i class="fas fa-thumbs-up"></i>
</label>
    <input type="checkbox" id="come"/>
<label for="come" id="ccome">
<a href="#comentario"><i class="fas fa-comment"></i></a>
</label>    


<style>

a{
  text-decoration: none;
}
             #llike{
        position: fixed;
        left: 8%;
        margin-top:95px;
    }
    
    
    #favorite{
        position: fixed;
        left: 8%;
        margin-top: 155;
    }
    

    #ccome{
         position: fixed;
        left: 8%;
                 
        margin-top:210px;
    }

    input[type="checkbox"] + #ccome i {
	-webkit-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
	color: rgb(167, 167, 167);
	transform: scale(1.0);
	-webkit-transform: scale(1.0);
}

    input[type="checkbox"]:checked + #llike i {
	-webkit-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
	color: rgb(99, 148, 255);
	transform: scale(1.3);
	-webkit-transform: scale(1.3);
}
    
input[type=checkbox] {
	clear: both;
	display: none;
}

input[type="checkbox"] {
  display: none;
}

input[type="checkbox"] + label {
	position: absolute;
	z-index: 100;
	left: calc(50% - 3em);
	top: calc(50% - 3em);
	display: block;
	text-align: center;
	line-height: 95px;
	cursor: pointer;
	-webkit-transition: all 300ms ease;
	transition: all 300ms ease;
	border-radius: 50%;
	background-blend-mode: color;
}

input[type="checkbox"] + label:after {
	content: '';
	z-index: -1;
	position: absolute;
	background: white;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	top: 0;
	left: 0;
	transform: scale(0);
	-webkit-transform: scale(0);
}

input[type="checkbox"]:checked + label i {
	-webkit-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
	color: rgb(220, 0, 0);
	transform: scale(1.3);
	-webkit-transform: scale(1.3);
}

input[type="checkbox"]:checked + label:after {
	-webkit-animation: like-a 0.3s 0.2s forwards;
	-moz-animation: like-a 0.3s 0.2s forwards;
	animation: like-a 0.3s 0.2s forwards;
}

input[type="checkbox"]:checked + label:before {
	-webkit-animation: like-a 0.5s 0s forwards;
	-moz-animation: like-a 0.5s 0s forwards;
	animation: like-a 0.5s 0s forwards;
}

    input[type="checkbox"] + label i {
	-webkit-transition: all 300ms ease-in-out;
	transition: all 300ms ease-in-out;
	color: rgb(167, 167, 167);
	transform: scale(1.0);
	-webkit-transform: scale(1.0);
}
    
label i {   /*Tamanho do Coração*/
	display: inline-flex;
	vertical-align: middle;
	font-size:30px;
	color: rgb(167, 167, 167);
}

@-webkit-keyframes like-a {
100% {
	-webkit-transform:scale(1.03);
	transform:scale(1.03);
	-moz-transform:scale(1.03);
} }
@-moz-keyframes like-a {
100% {
	-webkit-transform:scale(1.03);
	transform:scale(1.03);
	-moz-transform:scale(1.03);
} }
@keyframes like-a {
100% {
	-webkit-transform:scale(1.03);
	transform:scale(1.03);
	-moz-transform:scale(1.03);
} }


        </style>