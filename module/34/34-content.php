<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-34">
    <div class="container">
        <div class="tab">
            <button class="tablinks active">Description</button>
            <button class="tablinks">Additional information</button>
            <button class="tablinks">Review</button>
        </div>
        <div id="Description" class="tabcontent">
            <p>
                Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis
                bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet
                mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum.
                Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit
                consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan
                ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut
                metus varius laoreet. Quisque rutrum.
            </p>
        </div>
        <div id="Additional information" class="tabcontent">
            <table>
                <tr>
                    <th>Weight</th>
                    <td>2 kg</td>
                </tr>
                <tr>
                    <th>Dimensions</th>
                    <td>70 × 50 cm</td>
                </tr>
            </table>
        </div>
        <div id="Review" class="tabcontent">
            <h2 class="Reviews-title">
                1 review for <span>Bride Dress</span> </h2>
            <ul>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1-module-10.jpeg" class="photo" height="60" width="60">
                    <div class="comment-text">
                        <div class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>
                        <p class="meta">
                            <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                        </p>
                        <div itemprop="description" class="description">
                            <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                        </div>
                    </div>
                </li>
                <div id="commentbox">
                    <div id="respond">
                        <h3 id="reply-title"><span>Add a review</span></h3>
                        <p class="stars"><span><a class="star-1">1</a><a class="star-2">2</a><a class="star-3">3</a><a
                                    class="star-4">4</a><a class="star-5">5</a></span></p>
                        <select name="rating" id="rating" style="display: none;">
                            <option value="">Rate…</option>
                            <option value="5">Perfect</option>
                            <option value="4">Good</option>
                            <option value="3">Average</option>
                            <option value="2">Not that bad</option>
                            <option value="1">Very Poor</option>
                        </select>
                        <form id="commentform" class="comment-form">
                            <p class="comment-form-comment"><label>Your review</label> <textarea id="comment" cols="45"
                                    rows="8"></textarea></p>
                            <p><label>Name</span></label><input type="text" value="" size="30">
                            </p>
                            <p><label>Email</label><input id="email" name="email" type="text" value="" size="30"></p>
                            <p><input name="submit" type="submit" class="submit" value="Submit"> <input type="hidden">
                                <input type="hidden">
                            </p>
                    </div>
                </div>
        </div>
    </div>
</div>