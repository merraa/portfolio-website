<?php 
    $conn = new mysqli("localhost","root","","portfolio");

    $owner_details = "SELECT * FROM owner";
    $about = "SELECT * FROM about";
    $project_detail= "SELECT * FROM projects";

    $owner_result = $conn->query( $owner_details);
    $row = $owner_result->fetch_assoc();

    $about_result = $conn->query( $about);
    $row_about = $about_result->fetch_assoc();

    $projects_result = $conn->query( $project_detail);
    //$row_project = $projects_result->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo"><?php echo $row['Name'] ?></div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo"><?php echo $row['Name'] ?></div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/profile11.png" alt="meron muluye profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title"><?php echo $row['Name'] ?></h1>
        <p class="section__text__p2"><?php echo $row['Title'] ?></p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('<?php echo $row['Cv'] ?>')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='<?php echo $row['LinkedInLink'] ?>'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='<?php echo $row['GithubLink'] ?>"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="<?php echo $row_about['image']?>"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>2+ years <br />Frontend Development</p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>B.Sc. Bachelors Degree</p>
            </div>
          </div>
          <div class="text-container">
            <p>
                <?php echo $row_about['text']?> 
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>SASS</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>TypeScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Material UI</h3>
                  <p>Basic</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Backend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PostgreSQL</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Node JS</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PHP</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Express JS</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Git</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Data Science</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Power Bi</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>SQL</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>NumPy</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Scikit</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Pandas</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Machine Learning</h3>
                  <p>Basic</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
            <?php while($row_project = $projects_result->fetch_assoc()){ ?>
                <?php echo "hello" ?>
                <div class="details-container color-container">
                    <div class="article-container">
                        <img
                            src="<?php echo $row_project['image']?>"
                            alt="Project 1"
                            class="project-img"
                        />
                    </div>
                        <h2 class="experience-sub-title project-title"><?php echo $row_project['name']?></h2>
                    <div class="btn-container">
                            <button
                                class="btn btn-color-2 project-btn"
                                onclick="location.href='<?php echo $row_project['githubLink']?>'"
                            >
                                Github
                            </button>
                            <button
                                class="btn btn-color-2 project-btn"
                                onclick="location.href='https://github.com/'"
                            >
                                Live Demo
                            </button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:meronmuluye75@gmail.com">meronmuluye75@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/meron-muluye">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2024 Meron Muluye. All Rights Reserved.</p>
    </footer>
    <script src="index.js"></script>
  </body>
</html>