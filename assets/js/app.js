import * as THREE from 'three'
import randomColor from 'random-color'

// Set up canvas
const container = document.getElementById('bg-scene')
const scene = new THREE.Scene()
const camera = new THREE.PerspectiveCamera( 75, container.clientWidth/container.clientHeight, 0.1, 1000 )
camera.position.z = 8

const renderer = new THREE.WebGLRenderer()
renderer.setSize( container.clientWidth, container.clientHeight )
container.appendChild( renderer.domElement )

// Adjust on resize
window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight
  camera.updateProjectionMatrix()
  renderer.setSize(window.innerWidth, window.innerHeight)
})

// Create objects
const geometry = new THREE.BoxGeometry( 1, 1, 1 )

const makeCube = () => {
  const material = new THREE.MeshBasicMaterial( { color: randomColor().hexString() } )
  let cube = new THREE.Mesh(geometry, material)
  cube.position.x = (Math.random()*10) - 5
  cube.position.y = (Math.random()*10) - 5
  cube.position.z = (Math.random()*10) - 5
  scene.add( cube )
  return cube
}

// Instantiate objects
let cubes = []
for(let i = 0; i < 30; i++) {
  cubes[i] = makeCube()
}

// Animation loop
let count = 0
const animate = () => {
  requestAnimationFrame( animate )

  // Rotate cubes
  cubes.forEach(c => {
    c.rotation.x += 0.05
    c.rotation.y += 0.05
    c.rotation.x += 0.01
  })

  // Rotate camera
  camera.rotation.z += 0.02

  // Drop first cube & respawn new one every 4 frames...
  if(count % 4 === 0) {
    scene.remove(cubes[0])
    cubes.shift()
    cubes[cubes.length] = makeCube()
  }
  // Cycle heading text colour
  if(count % 10 === 0) {
    document.getElementsByClassName('swirly-colours')[0].style['color'] = randomColor().hexString()
  }

  count ++

  renderer.render(scene, camera)
}

animate()
