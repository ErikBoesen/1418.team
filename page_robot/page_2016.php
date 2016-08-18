<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Robot | Team 1418</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/banners.css">
</head>

<body>
  <?php include_once("../header.php"); ?>
  <article>
      <h1>2016 Robot</h1>
      <ul class="banners">
          <li><img src="/img/first.svg">2016 Chesapeake Regional Champions</li>
          <li><img src="/img/first.svg">2016 Innovation in Control (Chesapeake)</li>
          <li><img src="/img/first.svg">2016 Bethesda District Champions</li>
          <li><img src="/img/first.svg">2016 Industrial Design (Bethesda)</li>
          <li><img src="/img/first.svg">2016 District of Columbia Winner</li>
          <li><img src="/img/first.svg">2016 Innovation in Control (DC)</li>
      </ul>
      <img src="/img/robot.jpg" alt="The 2016 robot">
      <p>The 2016 FIRST challenge was called FIRST Stronghold. The challenge involved crossing a variable series of defenses, scoring balls into low and high goals, and lifting the robot several feet into the air. For a more detailed description, see <a href="https://www.youtube.com/watch?v=VqOKzoHJDjA">the official video reveal</a>.</p>
      <p>In the 2016 season, we made it further than ever before, taking first place in the Greater DC District competition, the Bethesda District Competition, and the FIRST Chesapeake district championship, qualifying us for the St. Louis World championship. After a hard fight at Worlds, we made it to the division quarterfinals in the 2016 Newton Division, widely believed to have been the strongest group of teams in FIRST history.</p>
      <p>Team 1418 was recognized as part of the top 1% of teams out of the 3,128 active at the time, as well as the best team in Virginia, Maryland, Delaware, West Virginia, and Washington, DC.</p>
      <p>You can view our team’s more detailed results on <a href="https://thebluealliance.com/team/1418">The Blue Alliance</a>.</p>
      <h5>Autonomous Modes</h5>
      <ul>
          <li><strong>Modular Autonomous</strong> The pride and joy of the programming team, Modular Autonomous, is out. Using our touchscreen UI, we input the robot's position, our allies, and the defenses on the field, and the robot automatically builds a custom autonomous for any one of the tens of thousands of combinations the field this year can offer. Using Modular autonomous we get can get up to 15 points from any position, ten for crossing a defense and five for scoring a low goal.</li>
          <li><strong>Low Bar</strong> Low Bar is a simple high-scoring autonomous that quickly goes over the low bar and shoots. Using Low Bar we get 15 points, ten for crossing a defense and five for scoring a low goal.</li>
          <li><strong>Direct Portcullis:</strong> Direct Portcullis gets us 10 points by crossing the Portcullis defense using our custom-built arm.</li>
          <li><strong>Direct Cheval</strong> Direct Cheval gets us 10 points by crossing the cheval de frise defense using our custom-built arms.</li>
      </ul>
      <h5>Teleop</h5>
      <p>This robot is an offensive powerhouse: in one early round, we defeated an alliance of three bots all by ourselves when our alliance partners couldn't join the game. We can breach every defense on our own using our pneumatic tires in order to cross most terrain, our arms to manipulate the more complex defenses, and our small frame to fit anywhere we need to.</p>
      <p>We are also able to shoot into the low goal using our arm, scoring extra points and bringing down the tower, working with our team to capture it.</p>
      <p>Lastly, we have a scissor lift on the back our robot that allows us to climb the tower, completing one third of the challenge as well as scoring us an extra 15 points at the end of the match.</p>
      <h5>Robot Abilities</h5>
      <ul>
          <li><strong>The Scissor-Lift</strong> Our Scissor lift is this robot's defining feature, giving us the 15 extra climbing points and challenging points to give us the competitive edge in any match. It extends from 9 inches to 5 feet 9 inches, and is able to climb in as little as 6 seconds, and its remarkable consistency helped us get as far as we did.</li>
          <li><strong>Custom-Made Arm</strong> Our custom arm is the most versatile part of the robot, allowing us to breach the portcullis and the cheval defenses, as well as letting us score into the low goal, bringing down tower health.</li>
          <li><strong>6 8" Pneumatic Wheel Drive Train</strong> Our Pneumatic wheels allow us to cross every defense with minimal wear-and-tear to our robot, as well as giving us excellent speed, maneuverability, and traction.</li>
          <li><strong>Small Lightweight Frame</strong> Our frame is specially designed to be as small as possible, allowing it to go under the low bar and fit in tight spaces, as well as being light enough for maneuverability and speed. However, our frame's best feature is its sturdiness and durability, resisting wear and tear, and keeping us on the field and out of the pits.</li>
      </ul>
      <h5>Programming</h5>
      <p>Just like in previous years, we used Python for our robot code. The code uses “magic robot”, a part of the RobotPy library that makes using objects between classes easy. It is object-oriented, and controls our arm using custom PID control.</p>
      <p>In addition to our robot code, team members <a href="https://github.com/ErikBoesen">Erik Boesen</a> and <a href="https://github.com/lleontan">Leon Tan</a> designed a UI for our touchscreen driver station. It is written in JavaScript/HTML/CSS, and communicates with the robot through a python-based tornado server.</p>
      <p>Member <a href="https://github.com/ErikBoesen">Erik Boesen</a> then simplified, cleaned up, and rereleased the UI as <a href="https://frcdashboard.github.io">FRC Dashboard</a>, a more easily-customizable and repurposable version of the UI.</p>
      <p>All our code can be found on <a href="https://www.github.com/frc1418">our GitHub organization</a>.</p>
      <div class="iframe-ext-wrapper">
          <div class="iframe-wrapper">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/c3EzwkpoO1A" allowfullscreen></iframe>
          </div>
      </div>
      <img src="/img/worlds.jpg" alt="The team at the 2016 St. Louis World Championships">
  </article>
  <?php include_once("../footer.php"); ?>
</body>
</html>
