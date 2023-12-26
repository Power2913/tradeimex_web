import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.module.min.js';
import { OrbitControls } from 'https://unpkg.com/three@0.126.0/examples/jsm/controls/OrbitControls.js';

// Cursor Move
const cursor = {
    x: 0,
    y: 0
}

window.addEventListener('mousemove', (event) => 
{
    cursor.x = event.clientX / sizes.width - 0.5
    cursor.y = - (event.clientY / sizes.height - 0.5)
})

//canvas
const canvas = document.querySelector('canvas.webgl')

//scene
const scene = new THREE.Scene()

//Object
const geometry = new THREE.BoxGeometry(1, 1, 1)
const material = new THREE.MeshBasicMaterial({ color: 'violet' })
const mesh = new THREE.Mesh(geometry, material)
scene.add(mesh)

//sizes
const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
}

window.addEventListener('resize', () => {
    //update sizes
    sizes.width = window.innerWidth
    sizes.height = window.innerHeight

})

//camera
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 1000)

// const aspectRatio = sizes.width / sizes.height
// const camera  = new THREE.OrthographicCamera(-1 * aspectRatio, 1 * aspectRatio, 1, -1, 0.1, 100)

// camera.position.x = 2
// camera.position.y = 2
camera.position.z = 2
camera.lookAt(mesh.position)
scene.add(camera)

//controls
// const controls = new OrbitControls(camera, canvas)

//Renderer
const renderer = new THREE.WebGLRenderer ({
    canvas: canvas
})
renderer.setSize(sizes.width, sizes.height)

//clock
const clock = new THREE.Clock()

//Animations
const tick = () => 
{
    //clock
    const elapsedTime = clock.getElapsedTime()
 
    // Update Object
    // mesh.rotation.y = elapsedTime;

    //update camera
    // camera.position.x = Math.sin(cursor.x * Math.PI * 2) * 3
    // camera.position.z = Math.cos(cursor.x * Math.PI * 2) * 3
    // camera.position.y = cursor.y * 5 
    // camera.lookAt(mesh.position)

    //render
    renderer.render(scene, camera)

    window.requestAnimationFrame(tick)
}

tick()