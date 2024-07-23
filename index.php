<?php
  // var
  $act03 = "active";
  // import
  include_once 'header.php';
?>

              <!-- Cuerpo 01 -->
              <div class="pb-3">
                <h1 class="title title--h1 title__separate">
                  <?php echo $nav03; ?>
                </h1>
              </div>
              <!-- Cuerpo 02 -->
              <div class="select">
                <span class="placeholder">
                  <?php echo $cat_AA; ?>
                </span>
                <ul class="filter">
                  <li class="filter__item">
                    <?php echo $cat_AB; ?>
                  </li>
                  <li class="filter__item active" data-filter="*">
                    <a class="filter__link active" href="#filter">
                      <?php echo $cat_00; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_01; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_01; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_02; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_02; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_03; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_03; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_04; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_04; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_05; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_05; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_06; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_06; ?>
                    </a>
                  </li>
                  <li class="filter__item" data-filter=".<?php echo $cat_07; ?>">
                    <a class="filter__link" href="#filter">
                      <?php echo $cat_07; ?>
                    </a>
                  </li>
                </ul>
                <input type="hidden" name="changemetoo" />
              </div>
              <!-- Cuerpo 03 -->
              <div class="gallery-grid js-masonry js-filter-container">
                <div class="gutter-sizer"></div>
                <!-- Item 1 -->
                <div class="gallery-grid__item <?php echo $cat_06; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_01; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_01_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_01; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_01; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_06; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_01; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_01; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_01; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_01; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 2 -->
                <div class="gallery-grid__item <?php echo $cat_02; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_02; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_02_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_02; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_02; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_02; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_02; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_02; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_02; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_02; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 3 -->
                <div class="gallery-grid__item <?php echo $cat_06; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_03; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_03_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_03; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_03; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_06; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_03; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_03; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_03; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_03; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 4 -->
                <div class="gallery-grid__item <?php echo $cat_07; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_04; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_04_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_04; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_04; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_07; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_04; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_04; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_04; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_04; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 5 -->
                <div class="gallery-grid__item <?php echo $cat_02; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_05; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_05_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_05; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_05; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_02; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_05; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_05; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_05; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_05; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 6 -->
                <div class="gallery-grid__item <?php echo $cat_06; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_06; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_06_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_06; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_06; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_06; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_06; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_06; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_06; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_06; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 7 -->
                <div class="gallery-grid__item <?php echo $cat_01; ?> <?php echo $cat_03; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_07; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_07_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_07; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_07; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_01; ?><br><?php echo $cat_04; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_07; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_07; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_07; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_07; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 8 -->
                <div class="gallery-grid__item <?php echo $cat_02; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_08; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_08_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_08; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_08; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_02; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_08; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_08; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_08; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_08; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 9 -->
                <div class="gallery-grid__item <?php echo $cat_01; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_09; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_09_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_09; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_09; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_06; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_09; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_09; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_09; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_09; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 10 -->
                <div class="gallery-grid__item <?php echo $cat_07; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_10; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_10_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_10; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_10; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_07; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_10; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_10; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_10; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_10; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 11 -->
                <div class="gallery-grid__item <?php echo $cat_01; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_11; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_11_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_11; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_11; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_01; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_11; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_11; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_11; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_11; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item 12 -->
                <div class="gallery-grid__item <?php echo $cat_05; ?>">
                  <div class="pb-33">
                    <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_12; ?>">
                      <div class="gallery-grid__image-wrap">
                        <img class="gallery-grid__image cover lazyload" src="<?php echo $img_product_12_01; ?>" alt="" />
                      </div>
                    </a>
                    <div class="row pb-33">
                      <div class="col-4 pb-33">
                        <a class="js-open-review" data-mfp-src="#review-<?php echo $name_product_12; ?>">
                          <div class="gallery-grid__caption">
                            <h3 class="title gallery-grid__title block-quote__author">
                              <?php echo $name_product_12; ?>
                            </h3>
                            <span class="gallery-grid__category">
                              <?php echo $cat_01; ?>
                            </span>
                          </div>
                        </a>
                      </div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_12; ?>" target="_blank" title="<?php echo $btn_d; ?> <?php echo $name_product_12; ?>">
                          <i class="font-icon feathericon-send"></i>
                          <?php echo $btn_d; ?>
                        </a>
                      </div>
                      <div class="col-2 pb-33"></div>
                      <div class="col-2 pb-33">
                        <a class="btn btn-submit" href="<?php echo $url_product_12; ?>" target="_blank" title="<?php echo $btn_tv; ?> <?php echo $name_product_12; ?>">
                          <i class="font-icon feathericon-video"></i>
                          <?php echo $btn_tv; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<?php
  // import
  include_once 'footer.php';
?>
