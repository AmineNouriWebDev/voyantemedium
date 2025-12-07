// three-scene.js - Animation de particules pour la page d'accueil

document.addEventListener('DOMContentLoaded', function() {
    // Vérifier si on est sur la page d'accueil
    if (!document.querySelector('body').classList.contains('home')) return;
    
    const container = document.getElementById('three-container');
    if (!container) return;
    
    // Variables de base Three.js
    let scene, camera, renderer, particles;
    
    // Initialisation
    function init() {
        // Scene
        scene = new THREE.Scene();
        
        // Camera
        camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 30;
        
        // Renderer
        renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);
        
        // Création des particules
        createParticles();
        
        // Lumière ambiante
        const ambientLight = new THREE.AmbientLight(0x8b5cf6, 0.3);
        scene.add(ambientLight);
        
        // Lumière directionnelle
        const directionalLight = new THREE.DirectionalLight(0x06b6d4, 0.5);
        directionalLight.position.set(5, 5, 5);
        scene.add(directionalLight);
        
        // Gestion du redimensionnement
        window.addEventListener('resize', onWindowResize);
        
        // Début de l'animation
        animate();
    }
    
    function createParticles() {
        const particlesGeometry = new THREE.BufferGeometry();
        const count = 5000;
        
        const positions = new Float32Array(count * 3);
        const colors = new Float32Array(count * 3);
        
        // Couleurs du thème
        const themeColors = [
            [139, 92, 246],  // Violet
            [6, 182, 212],   // Cyan
            [236, 72, 153],  // Rose
            [139, 92, 246]   // Violet
        ];
        
        for (let i = 0; i < count * 3; i += 3) {
            // Position aléatoire dans une sphère
            const radius = 50;
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos((Math.random() * 2) - 1);
            
            positions[i] = radius * Math.sin(phi) * Math.cos(theta);
            positions[i + 1] = radius * Math.sin(phi) * Math.sin(theta);
            positions[i + 2] = radius * Math.cos(phi);
            
            // Couleur aléatoire parmi les couleurs du thème
            const colorIndex = Math.floor(Math.random() * themeColors.length);
            const color = themeColors[colorIndex];
            
            colors[i] = color[0] / 255;
            colors[i + 1] = color[1] / 255;
            colors[i + 2] = color[2] / 255;
        }
        
        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particlesGeometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        
        // Matériel des particules
        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.05,
            vertexColors: true,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending
        });
        
        // Système de particules
        particles = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particles);
    }
    
    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    }
    
    let time = 0;
    
    function animate() {
        requestAnimationFrame(animate);
        time += 0.001;
        
        // Animation lente de rotation
        if (particles) {
            particles.rotation.x = time * 0.1;
            particles.rotation.y = time * 0.05;
            
            // Animation légère des particules
            const positions = particles.geometry.attributes.position.array;
            for (let i = 0; i < positions.length; i += 3) {
                positions[i] += Math.sin(time + i) * 0.001;
                positions[i + 1] += Math.cos(time + i) * 0.001;
                positions[i + 2] += Math.sin(time + i * 0.5) * 0.001;
            }
            particles.geometry.attributes.position.needsUpdate = true;
        }
        
        renderer.render(scene, camera);
    }
    
    // Démarrer l'animation
    init();
});