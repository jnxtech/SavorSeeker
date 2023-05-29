const canvas = document.getElementById('snowfall');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const snowflakes = [];
const numSnowflakes = 200;

class Snowflake {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.size = Math.random() * 2 + 1;
    this.speed = Math.random() * 3 + 1;
  }

  update() {
    this.y += this.speed;
    if (this.y > canvas.height) {
      this.y = 0;
      this.x = Math.random() * canvas.width;
    }
  }

  draw() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fillStyle = 'rgba(255, 255, 255, 0.8)';
    ctx.fill();
  }
}

function createSnowflakes() {
  for (let i = 0; i < numSnowflakes; i++) {
    snowflakes.push(new Snowflake());
  }
}

function drawSnowflakes() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  snowflakes.forEach((snowflake) => {
    snowflake.update();
    snowflake.draw();
  });
  requestAnimationFrame(drawSnowflakes);
}

function resize() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

window.addEventListener('resize', resize);

createSnowflakes();
drawSnowflakes();

// GSAP Animation
gsap.from('.login-container', {
  opacity: 0,
  x: '-100vw',
  scale: 0.2,
  rotation: 720,
  duration: 1.5,
  ease: 'power3.out',
  delay: 0.5,
});

gsap.from('.input, .button', {
  opacity: 0,
  y: '100vh',
  duration: 1,
  ease: 'back.out(1.7)',
  delay: 1,
  stagger: 0.2,
});

gsap.from('.error', {
  opacity: 0,
  x: '-100%',
  duration: 1.5,
  ease: 'elastic.out(1, 0.5)',
  delay: 1.5,
  onComplete: shakeError,
});

gsap.from('.label', {
  opacity: 0,
  scale: 0.2,
  rotation: -180,
  color: '#ff00ff',
  textShadow: '0 0 10px #ff00ff',
  duration: 1.5,
  ease: 'bounce.out',
  delay: 0.5,
});


gsap.set('.label', { perspective: 800 });
gsap.set('.label span', { transformOrigin: '50% 50% -100px' });

gsap.from('.label span', {
  opacity: 0,
  scale: 0.2,
  rotationX: -180,
  color: '#ff00ff',
  textShadow: '0 0 20px #ff00ff',
  duration: 2,
  ease: 'power3.out',
  delay: 2,
  stagger: 0.1,
});

function shakeError() {
  gsap.to('.error', {
    x: 'random(-20, 20)',
    y: 'random(-20, 20)',
    rotation: 'random(-10, 10)',
    repeat: -1,
    yoyo: true,
    duration: 0.2,
  });
}
