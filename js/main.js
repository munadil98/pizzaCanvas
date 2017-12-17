$("document").ready(function(){

	var width = window.innerWidth;
    var height = window.innerHeight;
    
    var stage = new Konva.Stage({
      container: 'containerCanvas',
      width: width,
      height: height,

    });

    var layer = new Konva.Layer();
   

   var rect1 = new Konva.Rect({
        x: 50,
        y: 20,
        width: 100,
        height: 300,
        fill: '#FF0000',
        stroke: 'black',
        strokeWidth: 2,
        opacity: 0.2
    });

   
    

    var imageObj1 = new Image();
    imageObj1.onload = function() {

      var background1 = new Konva.Image({
        x: 150,
        y: 20,
        image: imageObj1,
        width: 100,
        height: 300
      });

      // add the shape to the layer
      layer.add(background1);

      // add the layer to the stage
      stage.add(layer);

      background1.setZIndex(2);

    };
    imageObj1.src = 'images/grey-back.png';


    var rect2 = new Konva.Rect({
        x: 250,
        y: 20,
        width: 100,
        height: 300,
        fill: '#7F111C',
        stroke: 'black',
        strokeWidth: 2,
        opacity: 0.2
    });

    var imageObj2 = new Image();
    imageObj2.onload = function() {

      var background2 = new Konva.Image({
        x: 350,
        y: 20,
        image: imageObj2,
        width: 100,
        height: 300
      });

      // add the shape to the layer
      layer.add(background2);

      // add the layer to the stage
      stage.add(layer);

      background2.setZIndex(2); 
    
    };
    imageObj2.src = 'images/grey-back.png';

    var rect3 = new Konva.Rect({
        x: 450,
        y: 20,
        width: 100,
        height: 300,
        fill: '#7F111C',
        stroke: 'black',
        strokeWidth: 2,
        opacity: 0.2
    });


    // add the shape to the layer
    layer.add(rect1);
    layer.add(rect2);
    layer.add(rect3);

    rect1.setZIndex(3);
    
    rect2.setZIndex(3);
         
    rect3.setZIndex(3);

    // add the layer to the stage
    stage.add(layer);

    var layerAnim = new Konva.Layer();

    var imageObj3 = new Image();
    imageObj3.onload = function() {

      var deluxe = new Konva.Image({
        x: 100,
        y: 100,
        image: imageObj3,
        width: 50,
        height: 50
      });

      // add the shape to the layer
      layerAnim.add(deluxe);

      // add the layer to the stage
      stage.add(layerAnim);


      var amplitude = 50;
    var period = 8000;
    // in ms
    var centerX = 200;

    var anim = new Konva.Animation(function(frame) {
        deluxe.setX(amplitude * Math.sin(frame.time * 2 * Math.PI / period) + centerX);
    }, layerAnim);

    anim.start();

    deluxe.setZIndex(1);
    layer.draw();

    };
    imageObj3.src = 'images/deluxe.png';

	
});