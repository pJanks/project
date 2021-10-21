<section class="snake-game-wrapper section-wrapper snake">
  <div class="heading-and-canvas-wrapper">
    <div class="snake-heading-and-timer-wrapper">
      <h4 class="snake-heading subheading">
        SNAKE: RED && BLUE PILLS
      </h4>
      <div class="timer">00:00:00</div>
    </div>
    <x-game-over-modal />
    <x-game-instructions-modal />
    <canvas id="snake-game-canvas" class="snake-game-canvas" tabindex="1" width="600" height="350">
      Your browser does not support canvas element.
    </canvas>
  </div>
  <div class="snake-game-buttons-wrapper">
    <button class="start-or-reset-game-button game-button">Start</button>
    <button class="view-instructions-button game-button">Instructions</button>
    <button class="view-leaderboard-button game-button" disabled>High Scores</button>
  </div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</section>