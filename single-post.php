<?php
  // var
  $act04 = "active";
  // import
  include_once 'header.php';
?>

              <!-- About -->
              <div class="pb-0 pb-sm-2">
                <h2 class="title title--h1 title__separate">Blog</h2>
              </div>

              <!-- Post -->
              <div class="pb-3">
                <a class="btn-back" href="blog.php">
                  <i class="feathericon-arrow-left"></i>
                  <?php echo $btn_v; ?> <?php echo $nav04; ?>
                </a>
                <header class="header-post">
                  <h1 class="title title--h1">Web Design Weekly #38</h1>
                  <div class="caption-post">
                    <p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes.</p>
                  </div>
                  <div class="header-post__image-wrap">
                    <img class="cover lazyload" src="assets/images/news/image_02.jpg" alt="" />
                  </div>
                </header>
                <div class="caption-post">
                  <p>We can learn how to take joy in the things we create whether they take the form of a fleeting experience or an heirloom that will last for generations. We can learn that reward comes in creation and re-creation.</p>
                  <p>It is not enough that we build products that function, that are understandable and usable, we also need to build products that bring joy and excitement, pleasure and fun, and, yes, beauty to people’s lives. Creativity is to discover a question that has never been asked.</p>
                </div>
                <div class="gallery-post">
                  <img class="gallery-post__item cover lazyload" src="assets/images/news/news-add-1.jpg" data-zoom alt="" />
                  <img class="gallery-post__item cover lazyload" src="assets/images/news/news-add-2.jpg" data-zoom alt="" />
                  <div class="gallery-post__caption">Work by <a href="#">Colin Adams</a>, <a href="#">Mark Craig</a></div>
                </div>
                <div class="caption-post">
                  <h2 class="title title--h2">If you’re not prepared to be wrong, you’ll never come up with anything original.</h2>
                  <p>
                    Here is one of the few effective keys to the design problem: the ability of the designer to recognize as many of the constraints as possible his willingness and enthusiasm for working within these constraints. The most profound technologies are those that disappear. They weave
                    themselves into the fabric of everyday life until they are indistinguishable from it.
                  </p>
                  <blockquote class="block-quote">
                    <p>The alternative to good design is always bad design. There is no such thing as no design.</p>
                    <span class="block-quote__author">Adam Judge</span>
                  </blockquote>
                  <p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes.</p>
                  <p>
                    We can learn how to take joy in the things we create whether they take the form of a fleeting experience or an heirloom that will last for generations. We can learn that reward comes in creation and re-creation, no just in the consumption of the world around us. Active
                    participation in the process of creation is our right and our privilege. We can learn to measure the success of our ideas not by our bank accounts by their impact on the world.
                  </p>
                </div>
                <footer class="footer-post">
                  <a class="footer-post__share" href="http://facebook.com/"><i class="font-icon icon-facebook"></i><span>Facebook</span></a>
                  <a class="footer-post__share" href="http://twitter.com/"><i class="font-icon icon-twitter"></i><span>Twitter</span></a>
                  <a class="footer-post__share" href="http://linkedin.com/"><i class="font-icon icon-linkedin2"></i><span>Linkedin</span></a>
                </footer>
              </div>

              <!-- Comments section -->
              <h2 class="title title--h2">Comments (3)</h2>

              <!-- Comment -->
              <div class="comment-box">
                <div class="comment-box__inner box">
                  <figure class="box box-avatar box-avatar--not-border">
                    <img src="assets/images/avatar-1.png" alt="Daniel Lewis" />
                  </figure>
                  <div class="comment-box__body">
                    <h3 class="comment-box__details"><span>Daniel Lewis</span><span class="comment-box__details-date">5 min ago</span></h3>
                    <p>Very interesting and informative article on design. I learned a lot.</p>

                    <ul class="comment-box__footer">
                      <li><a href="#" class="link-gradient">Reply</a></li>
                    </ul>
                  </div>
                </div>

                <!-- Comment -->
                <div class="comment-box">
                  <div class="comment-box__inner box">
                    <figure class="box box-avatar box-avatar--not-border">
                      <img src="assets/images/avatar-2.png" alt="Daniel Lewis" />
                    </figure>
                    <div class="comment-box__body">
                      <h3 class="comment-box__details"><span>Jessica Miller</span><span class="comment-box__details-date">1 min ago</span></h3>
                      <p>I agree, a very interesting article. Thank you very much!<img class="emoji" src="assets/icons/emoji/emoji-nerd.svg" alt="nerd" /></p>

                      <ul class="comment-box__footer">
                        <li><a href="#" class="link-gradient">Reply</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Comment -->
              <div class="comment-box">
                <div class="comment-box__inner box">
                  <figure class="box box-avatar box-avatar--not-border">
                    <img src="assets/images/avatar-4.png" alt="Daniel Lewis" />
                  </figure>
                  <div class="comment-box__body">
                    <h3 class="comment-box__details"><span>Henry William</span><span class="comment-box__details-date">15 min ago</span></h3>
                    <p>Thanks for the good article. Looking forward to new ones.</p>

                    <ul class="comment-box__footer">
                      <li><a href="#" class="link-gradient">Reply</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Comment form -->
              <ul class="social-auth">
                <li class="social-auth__item">Login with:</li>
                <li class="social-auth__item">
                  <a class="social-auth__link" href="#"><i class="font-icon icon-facebook"></i></a>
                </li>
                <li class="social-auth__item">
                  <a class="social-auth__link" href="#"><i class="font-icon icon-twitter"></i></a>
                </li>
                <li class="social-auth__item">
                  <a class="social-auth__link" href="#"><i class="font-icon icon-dribbble"></i></a>
                </li>
                <li class="social-auth__item">
                  <a class="social-auth__link" href="#"><i class="font-icon icon-behance"></i></a>
                </li>
              </ul>
              <form class="comment-form">
                <textarea id="commentForm" class="textarea form-control" required="required" placeholder="Write a Comment..." rows="1"></textarea>
                <button type="submit" class="btn btn-submit"><i class="font-icon icon-send"></i></button>
                <div class="dropdown dropup">
                  <button type="button" class="btn btn-emoji" id="dropdownEmoji" data-bs-toggle="dropdown" aria-haspopup="true"><i class="font-icon icon-smile"></i></button>
                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="dropdownEmoji">
                    <div class="emoji-wrap">
                      <img class="emoji" src="assets/icons/emoji/emoji-laughing.svg" title=":laughing:" alt="laughing" />
                      <img class="emoji" src="assets/icons/emoji/emoji-happy-2.svg" title=":happy 2:" alt="happy 2" />
                      <img class="emoji" src="assets/icons/emoji/emoji-crazy.svg" title=":crazy:" alt="crazy" />
                      <img class="emoji" src="assets/icons/emoji/emoji-bad.svg" title=":bad:" alt="bad" />
                      <img class="emoji" src="assets/icons/emoji/emoji-angry.svg" title=":angry:" alt="angry" />
                      <img class="emoji" src="assets/icons/emoji/emoji-happy.svg" title="happy" alt="happy" />
                      <img class="emoji" src="assets/icons/emoji/emoji-thinking.svg" title=":thinking:" alt="thinking" />
                      <img class="emoji" src="assets/icons/emoji/emoji-sad.svg" title=":sad:" alt="sad" />
                      <img class="emoji" src="assets/icons/emoji/emoji-pressure.svg" title=":pressure:" alt="pressure" />
                      <img class="emoji" src="assets/icons/emoji/emoji-in-love.svg" title=":in love:" alt="in love" />
                      <img class="emoji" src="assets/icons/emoji/emoji-nerd.svg" title=":laughing:" alt="nerd" />
                      <img class="emoji" src="assets/icons/emoji/emoji-happy-3.svg" title=":happy 3:" alt="happy 3" />
                      <img class="emoji" src="assets/icons/emoji/emoji-shocked.svg" title=":shocked:" alt="shocked" />
                      <img class="emoji" src="assets/icons/emoji/emoji-wink.svg" title=":wink:" alt="wink" />
                      <img class="emoji" src="assets/icons/emoji/emoji-sweating.svg" title=":sweating:" alt="sweating" />
                      <img class="emoji" src="assets/icons/emoji/emoji-shocked-2.svg" title=":shocked 2:" alt="shocked 2" />
                      <img class="emoji" src="assets/icons/emoji/emoji-shocked-3.svg" title=":shocked 3:" alt="shocked 3" />
                      <img class="emoji" src="assets/icons/emoji/emoji-sad-2.svg" title=":sad 2:" alt="sad 2" />
                    </div>
                  </div>
                </div>
              </form>

<?php
  // import
  include_once 'footer.php';
?>
