// Settings
const snowSettings = {
    imageUrl: "http://i13.servimg.com/u/f13/11/52/70/02/snowba10.png",
    snowflakeCount: 50,
    hideSnowTime: 0,
    snowDistance: "pageheight"
  };
  
  // Snowflake class
  class Snowflake {
    constructor(imageUrl) {
      this.image = new Image();
      this.image.src = imageUrl;
      this.reset();
  
      this.element = document.createElement("div");
      this.element.style.position = "absolute";
      this.element.appendChild(this.image);
    }
  
    reset() {
      this.x = Math.random() * (window.innerWidth - 50);
      this.y = Math.random() * window.innerHeight;
      this.amplitude = Math.random() * 20;
      this.horizontalSpeed = 0.02 + Math.random() / 10;
      this.verticalSpeed = 0.7 + Math.random();
    }
  
    update() {
      this.y += this.verticalSpeed;
      if (this.y > window.innerHeight - 50) {
        this.reset();
      }
      this.x += this.amplitude * Math.sin(this.horizontalSpeed);
      this.element.style.top = `${this.y}px`;
      this.element.style.left = `${this.x}px`;
    }
  }
  
  // Create snowflakes
  const snowflakes = [];
  for (let i = 0; i < snowSettings.snowflakeCount; i++) {
    const snowflake = new Snowflake(snowSettings.imageUrl);
    snowflakes.push(snowflake);
    document.body.appendChild(snowflake.element);
  }
  
  // Animation loop
  function updateSnowflakes() {
    for (const snowflake of snowflakes) {
      snowflake.update();
    }
    requestAnimationFrame(updateSnowflakes);
  }
  
  // Start the animation
  updateSnowflakes();
  
  // Hide snow (optional)
  if (snowSettings.hideSnowTime > 0) {
    setTimeout(() => {
      for (const snowflake of snowflakes) {
        snowflake.element.style.visibility = "hidden";
      }
    }, snowSettings.hideSnowTime * 1000);
  }
  