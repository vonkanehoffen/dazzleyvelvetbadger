/* storechild.js */

(function() {

  const container = document.getElementById('bg-scene')
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera( 75, container.clientWidth/container.clientHeight, 0.1, 1000 );
  camera.position.z = 4;

  const renderer = new THREE.WebGLRenderer();
  renderer.setSize( container.clientWidth, container.clientHeight );
  container.appendChild( renderer.domElement );



  const geometry = new THREE.BoxGeometry( 1, 1, 1 );
  const material = new THREE.MeshBasicMaterial( { color: 0x00fff0 } );
  const cube = new THREE.Mesh( geometry, material );
  const cube2 = new THREE.Mesh(geometry, material);
  cube2.position.x = 2
  cube2.position.y = 2
  cube2.position.z = 1

  let cubes = []
  for(let i = 0; i < 30; i++) {
    cubes[i] = new THREE.Mesh(geometry, material)
    cubes[i].position.x = (Math.random()*10) - 5
    cubes[i].position.y = (Math.random()*10) - 5
    cubes[i].position.z = (Math.random()*10) - 5
    scene.add( cubes[i] )
  }

  const animate = function () {
    requestAnimationFrame( animate );

    cubes.forEach(c => {
      c.rotation.x += 0.05
      c.rotation.y += 0.05
      c.rotation.x += 0.01
    })

    renderer.render(scene, camera);
  };

  animate();

}).call( this );