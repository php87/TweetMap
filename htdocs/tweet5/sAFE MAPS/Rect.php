<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-
microsoft-com:vml" lang="fr" xml:lang="fr">
<head>
<script src="http://maps.google.ch/maps?
file=api&amp;v=2.x&amp;key=............." type="text/javascript">  </script>

<script type="text/javascript">
var r1=null;
var r2=null;
var myrectangle;
var dragRectangle;
function init() {
    if (GBrowserIsCompatible()) {
        map=new GMap2(document.getElementById("map"),{draggableCursor:"crosshair"});
        map.setCenter(new GLatLng(40.730885,-73.997383), 15);
        map.addControl(new GScaleControl());
        //map.enableScrollWheelZoom();
        map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());
        GEvent.addListener(map, 'click', mapClickRectangle);
        eventOnMove=GEvent.addListener(map, 'mousemove', mapDragRectangle);
		//eventOnMouseOut = GEvent.addListener(map, 'mouseout', mapRelease);
        dragRectangle=false;
    }

}


function mapClickRectangle(overlay,point)
{
r2 = null;

    if (!r1)
    {   // First click
        r1=point;
		 if (myrectangle != null) {
	map.removeOverlay(myrectangle);
	}
        myrectangle=null;
		
        //dragRectangle=true;
    }
    else
    {   // Second click
	   	 r2=point;

       GEvent.removeListener(eventOnMove);
	    myrectangle=null;
     //dragRectangle=false;
    draw_rectangle(r1,r2);
	
	r1=null;
}

 
}

function mapDragRectangle(point)
{
  if (dragRectangle)
    {
	
     // draw_rectangle(r1,point);
	}
}

function draw_rectangle(a,b)
{

    if (myrectangle != null) 
	{
	map.removeOverlay(myrectangle);
	}
	
    myrectangle = new GPolygon(new Array(a,new GPoint(a.x,b.y),b,new GPoint(b.x,a.y),a),'#fd942d',1,1,'#96bdfe',.5); //make proerty clickable = false it should work.
    map.addOverlay(myrectangle);

	document.getElementById('lati').value=a;
	document.getElementById('long').value=b;
	
	calculateDistance(a.x,a.y,b.x,b.y);
	}

	
	function Calcrad(x)
	{
	return x*Math.PI/180;
	}
	
	function Calcdeg(x)
	{
	return x * 180/Math.PI;
	}
function calculateDistance(lat1,long1,lat2,long2)
{
		var R = 3963; // miles
		var dLat = Calcrad(lat2-lat1);
		var dLon = Calcrad(long2-long1);
		
		var m = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(Calcrad(lat1)) * Math.cos(Calcrad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2);
		
		var n = 2 * Math.atan2(Math.sqrt(m), Math.sqrt(1-m));
		
		var d = R * n;
		var radius = d/2;
		//alert(radius);
		var Bx = Math.cos(Calcrad(lat2)) * Math.cos(dLon);
		var By = Math.cos(Calcrad(lat2)) * Math.sin(dLon);
		var latd3 = Math.atan2(Math.sin(Calcrad(lat1))+Math.sin(Calcrad(lat2)),Math.sqrt((Math.cos(Calcrad(lat1))+Bx)*(Math.cos(Calcrad(lat1))+Bx) + By*By) ); 
		var longd3 = Calcrad(long1) + Math.atan2(By, Math.cos(Calcrad(lat1)) + Bx);
		var long3 = Calcdeg(latd3);
		var lat3 = Calcdeg(longd3);
		//alert('Lat1 = '+lat1+' Long1 = '+long1+' Lat2 = '+lat2+' Long2 = '+long2+' Lat3 = '+lat3+ ' Long3 = '+long3);
		document.getElementById('nlati').value=lat3;
	document.getElementById('nlong').value=long3;
	document.getElementById('rad').value=radius;
	window.open('Search2.php?L1=' + encodeURIComponent(lat3) + '&L2=' + encodeURIComponent(long3) + '&rad=' + encodeURIComponent(radius),'two');
	
}
	

</script>
</head>

<body onload = "init()" onunload = "GUnload()">
<div id="map" style="width: 500px; height: 400px"></div>
<div id="bot">
R1: <input type ="text"size="70" name="L1" id = "lati"\>
<br>
	R2:<input type ="text" size="70" name="L2" id = "long"\> 
	<br>
	New point Lat:<input type ="text" name="NL1" id = "nlati" \>
	<br>
	New point Lon:<input type ="text" name="NL2" id = "nlong"\> 
	<br>
	Radius: <input type ="text" name="rd" id = "rad"\>
	</div>
</body>
</html> 