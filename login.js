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
            snowflakes.forEach(snowflake => {
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