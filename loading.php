<!DOCTYPE html>
<html>
  <head>
    <style>
      html,
      body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 100%;
      }

      .loader-body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #ffffff;
        overflow: hidden; /* Hides any content that exceeds the viewport */
      }

      .loader {
        height: 9em;
        width: 9em;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /* Rest of your existing CSS styles for the loader */

      .circle {
        position: absolute;
        height: 80%;
        width: 80%;
        border-radius: 50%;
        border-style: solid;
      }
      .white {
        border-width: 6px 3px 0 0;
        border-color: rgb(250, 3, 3) rgb(209, 0, 0) transparent transparent;
        animation: 1s rotate-white linear infinite;
      }
      .red {
        border-width: 0 0 6px 3px;
        border-color: transparent transparent rgb(0, 236, 158) rgb(0, 255, 179);
        animation: 1s rotate-red linear infinite;
      }
      .orange {
        border-width: 0 6px 3px 0;
        border-color: transparent rgb(255, 166, 0) orange transparent;
        animation: 1s rotate-orange linear infinite;
      }
      .yellow {
        border-width: 6px 0 0 3px;
        border-color: rgb(0, 0, 0) transparent transparent rgb(0, 0, 0);
        animation: 1s rotate-yellow linear infinite;
      }
      @keyframes rotate-white {
        from {
          transform: rotateX(45deg) rotateY(-35deg) rotateZ(0deg);
        }
        to {
          transform: rotateX(45deg) rotateY(-35deg) rotateZ(360deg);
        }
      }
      @keyframes rotate-red {
        from {
          transform: rotateX(45deg) rotateY(35deg) rotateZ(0deg);
        }
        to {
          transform: rotateX(45deg) rotateY(35deg) rotateZ(360deg);
        }
      }
      @keyframes rotate-orange {
        from {
          transform: rotateX(70deg) rotateZ(0deg);
        }
        to {
          transform: rotateX(70deg) rotateZ(360deg);
        }
      }
      @keyframes rotate-yellow {
        from {
          transform: rotateY(70deg) rotateZ(0deg);
        }
        to {
          transform: rotateY(70deg) rotateZ(360deg);
        }
      }
    </style>
  </head>
  <body>
    <div class="loader-body">
      <div class="loader">
        <div class="circle white"></div>
        <div class="circle red"></div>
        <div class="circle orange"></div>
        <div class="circle yellow"></div>
      </div>
    </div>
  </body>
</html>
