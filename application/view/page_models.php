<!-- This is the content for X3D models and 3D Image Gallery -->
<div id="models" class="main_contents" style="display:none;">
  <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
  <div class="row">
    <!-- 3D image gallery -->
    <div class="col-sm-3">
      <div class="card text-left">
        <div class="card-header gallery-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Gallery</a>
            </li>
        </div>
        <div class="card-body">
          <div class="gallery" id="gallery"> </div>
          <div class="card-text description_gallery drinksText">rendering 3D Image Gallery objects by blender. </div>
        </div>
      </div> <!-- End gallery card -->
    </div> <!-- End gallery column -->

    <!-- X3D Model -->
    <div class="col-sm-6">
      <div class="card text-left">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <!-- X3D Models -->
          <div>
            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

            <button type="button" class="btn btn-success btn-responsive"
              onMouseUp="cokeScene(); cokeDescription();">futurecola</button>
            <button type="button" class="btn btn-success btn-responsive"
              onMouseUp="spriteScene(); spriteDescription();">pepsi</button>
            <button type="button" class="btn btn-success btn-responsive"
              onMouseUP="pepperScene(); pepperDescription();">ShifuKong</button>

            <!-- Place the X3D code here -->
            <div class="model3D">
              <x3d id="wire"  height='400px'>
                <scene>
                    <navigationInfo id="head" headlight='true' type='"EXAMINE"'></navigationInfo>
                    <background skyColor="0 0 0"></background>
                    <!-- <Viewpoint position="-3.25762 23.85703 48.74621" orientation="-0.99104 -0.13344 -0.00551 0.46917"></Viewpoint> -->
                    <directionalLight id="directional" direction='0 -1 0' on="TRUE" intensity='2.0' shadowIntensity='0.0'>
                    </directionalLight>
                    <PointLight id='point' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0'
                        location='-2000 10 0.5 ' attenuation='0 0 0' radius='10000'> </PointLight>
                    <SpotLight id='spot' on="TRUE" beamWidth='0.9' color='0 0 255' cutOffAngle='0.78' location='0 0 12'
                    radius='10022'></SpotLight>
                    <!-- <Inline nameSpaceName="light" mapDEFToID="true" url="static/assets/x3d/futurecola.x3d"></Inline> -->
                    <Switch whichChoice="0" id='SceneSwitch'>
                      <transform>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="static/assets/x3d/futurecola.x3d"> </inline>
                      </transform>
                      <transform >
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="static/assets/x3d/peps.x3d"> </inline>
                      </transform>
                      <transform>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="static/assets/x3d/ShifuKong.x3d"> </inline>
                      </transform>
                    </Switch>
                    <Transform translation="0 -9.0 0" rotation="1 0 0 -1.57">
                        <Shape>
                            <Appearance>
                                <Material diffuseColor="0.7 0.7 0.7"></Material>
                            </Appearance>
                            <Plane solid="false" size="30 30"></Plane>
                        </Shape>
                    </Transform>
                </scene>
              </x3d>
            </div>

            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>

            <div id="tools" style="width: 500px;">
              <script>
                  function lightSwitch(id) {
                      var light = document.getElementById(id);
                      console.log(light);
                      if (light.getAttribute('on') != 'TRUE')
                          light.setAttribute('on', 'TRUE');
                      else
                          light.setAttribute('on', 'FALSE');
                  }

                  function headlight() {
                      var h = document.getElementById("head");
                      console.log(h);
                      if (h.getAttribute('headlight') == 'true')
                          h.setAttribute('headlight', 'false');
                      else
                          h.setAttribute('headlight', 'true');
                  }

              </script>

              <a href="#">Lights : </a>
              <input type="checkbox" checked="true" onclick="lightSwitch('point')">
              <label>point light</label>
              <input type="checkbox" checked="true" onclick="lightSwitch('spot')">
              <label>spot light</label>
              <input type="checkbox" checked="true" onclick="lightSwitch('directional')">
              <label>directional light</label>
              <input type="checkbox" checked="true" onclick="headlight()">
              <label>headlight</label>
            </div>
            <div class="card-text drinksText"><a href='https://github.com/KYCCCCC/AppX3Dom/tree/master/3d'> archive on
                github codebase </a> </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-sm-3">
    <div id="interaction" class="row" style="display:none;">
  <!-- <div class="col-sm-4"> -->
    <div>
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
              <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
              <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
              <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
              <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
              <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="card-Title x3dCamera_Subtitle drinksText">
          <h3>Camera Views</h3>
        </div>
        <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
        <div class="card-text x3dCameraDescription drinksText">
          <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views
          </p>
        </div>
      </div>
    </div>

  </div>
  <div>
  <!-- </div>
  <div class="col-sm-4"> -->
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Animation</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="card-Title x3dAnimationSubtitle drinksText">
          <h3>Animation Options</h3>
        </div>
        <a href="#" class="btn btn-outline-light btn-responsive" onclick="rotx();">RotX</a>
        <a href="#" class="btn btn-outline-light btn-responsive" onclick="roty();">RotY</a>
        <a href="#" class="btn btn-outline-light btn-responsive" onclick="rotz();">RotZ</a>
        <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopAllRotation();">Stop</a>
        <div class="card-text x3dAnimationDescription drinksText">
          <p>These buttons select a range of X3D animation options</p>
        </div>
      </div>
    </div>
  </div>
  <div>
  <!-- </div> -->
  <!-- <div class="col-sm-4"> -->
    <div class="card text-left">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Polygon</a>
              <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
              <a class="dropdown-item" href="#">Vertex</a>
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
              <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
              <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
              <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
            </div>
          </li> -->
        </ul>
      </div>
      <div class="card-body">
        <div class="card-Title x3dRendersubtitle drinksText">
          <h3>Render and Lighting Options</h3>
        </div>
        <!-- <a href="#" class="btn btn-success btn-responsive">Poly</a> -->
        <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
        <!-- <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a> -->
        <!-- <a href="#" class="btn btn-outline-dark btn-responsive">Default</a> -->
        <div class="card-text x3dRenderDescription drinksText">
          <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more
            options</p>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->
</div>

    </div>


  </div> <!-- End row for X3D Model and Gallery -->
</div>




<div id="cokeDescription" class="row" style="display:none;">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div id="title_coke" class="card-title drinksText"></div>
        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
        <div id="description_coke" class="card-text drinksText"></div>
        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit
          Coke</a>
      </div>
    </div>
  </div>
</div>
<div id="spriteDescription" class="row" style="display:none;">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div id="title_sprite" class="card-title drinksText"></div>
        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
        <div id="description_sprite" class="card-text drinksText"></div>
        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit
          Sprite</a>
      </div>
    </div>
  </div>
</div>
<div id="pepperDescription" class="row" style="display:none;">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div id="title_pepper" class="card-title drinksText"></div>
        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
        <div id="description_pepper" class="card-text drinksText"></div>
        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit
          Pepper.</a>
      </div>
    </div>
  </div>
</div>

<script>
var spinning;
function rotx()
{
  stopAllRotation();
	spinning = true;
	document.getElementById('model__RotationTimer1').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer4').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer7').setAttribute('enabled', spinning.toString());
}
function roty()
{
  stopAllRotation();
	spinning = true;
	document.getElementById('model__RotationTimer2').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer5').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer8').setAttribute('enabled', spinning.toString());
}
function rotz()
{
  stopAllRotation();
	spinning = true;
	document.getElementById('model__RotationTimer3').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer6').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer9').setAttribute('enabled', spinning.toString());
}
function stopAllRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer1').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer2').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer3').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer4').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer5').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer6').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer7').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer8').setAttribute('enabled', spinning.toString());
  document.getElementById('model__RotationTimer9').setAttribute('enabled', spinning.toString());
}
</script>