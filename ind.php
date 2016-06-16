<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<link rel="stylesheet" type="text/css" href="style2.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
</head>
<body style="background-color:gray">
<canvas id="world" width="818" height="643" style="background-image=url(images/c2.jpg)"></canvas>	
  <script>
function Particle(t,i,s){this.x=t||0,this.y=i||0,this.ox=this.x,this.oy=this.y,this.mass=s||1,this.massInv=1/this.mass,this.fixed=!1,this.update=function(t){if(!this.fixed){var i=0,s=0,e=this.x,n=this.y;this.x+=this.x-this.ox+i*this.massInv*t*t,this.y+=this.y-this.oy+s*this.massInv*t*t,this.ox=e,this.oy=n}}}function Spring(t,i,s,e){this.p1=t,this.p2=i,this.restLength=s||10,this.strength=e||1,this.update=function(s){var e,n=i.x-t.x,a=i.y-t.y,h=Math.sqrt(n*n+a*a)+1e-4,r=(h-this.restLength)/(h*(t.massInv+i.massInv))*this.strength;t.fixed||(e=r*t.massInv,t.x+=n*e,t.y+=a*e),i.fixed||(e=-r*i.massInv,i.x+=n*e,i.y+=a*e)}}function Sim(){this.particles=[],this.springs=[],this.tick=function(t){var i,s;for(i=0,s=this.springs.length;s>i;++i)this.springs[i].update(t);for(i=0,s=this.particles.length;s>i;++i)this.particles[i].update(t)}}function init(){for(var t,i,e,n,a=STEP,h=LENGTH,r=h/a,o=.5*canvas.width,c=.5*canvas.height,x=0;r>x;++x)t=new Particle(o+200*(Math.random()-.5),c+200*(Math.random()-.5),.1+.01*Math.random()),sim.particles.push(t),x>0&&(s=new Spring(t,i,a,.95),sim.springs.push(s)),i=t;n=sim.particles[0],n.x=50,n.y=50,e=sim.particles[r-1],e.fixed=!0,canvas.addEventListener("mousemove",function(t){e.x=t.clientX,e.y=t.clientY})}function step(){var t=(new Date).getTime(),i=t-old;sim.tick(i),canvas.width=canvas.width;var s,e,n,a,h,o,c,x,d,l,m,p=[],v=[];for(s=0,e=sim.particles.length-1;e>s;++s)n=sim.particles[s],a=sim.particles[s+1],h=a.x-n.x,o=a.y-n.y,c=n.x+.5*h,x=n.y+.5*o,p[s]={x:c,y:x},v[s]=Math.atan2(o,h);for(context.beginPath(),s=0,e=p.length;e>s;++s)n=sim.particles[s],a=p[s],m=v[s],r=Math.sin(s/e*Math.PI)*THICKNESS,d=Math.sin(m-HALF_PI)*r,l=Math.cos(m-HALF_PI)*r,context.quadraticCurveTo(n.x+l,n.y+d,a.x+l,a.y+d);for(s=p.length-1;s>=0;--s)n=sim.particles[s+1],a=p[s],m=v[s],r=Math.sin(s/e*Math.PI)*THICKNESS,d=Math.sin(m+HALF_PI)*r,l=Math.cos(m+HALF_PI)*r,context.quadraticCurveTo(n.x+l,n.y+d,a.x+l,a.y+d);context.strokeStyle="rgba(255,255,255,0.1)",context.lineWidth=8,context.stroke(),context.strokeStyle="rgba(0,0,0,0.8)",context.lineWidth=.5,context.stroke(),context.fillStyle="rgba(228,228,228,0.9)",context.fill(),old=t,setTimeout(step,FPS)}function resize(){canvas.width=window.innerWidth,canvas.height=window.innerHeight}var TWO_PI=2*Math.PI,HALF_PI=.5*Math.PI,THICKNESS=12,LENGTH=10,STEP=.1,FPS=1e3/60,sim=new Sim,old=(new Date).getTime(),canvas=document.getElementById("world"),context=canvas.getContext("2d");window.addEventListener("resize",resize),resize(),init(),step();
</script>	
<div class="clip_frame" id="u5044" style="margin-left:25%;" >
<div class="grid" style="background-color:#adaa88;position:fixed;margin-top:15%;"> 
	
				<a class="link link--ilin" href="scroll.html"><span>Nutri</span><span>Guide</span></a>
			</div>   
</div>
</body>
