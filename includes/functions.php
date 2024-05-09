<?php
// Ubuntu Community Portal site functions
// 0.1

// Pull and echo events from master calender json
function showEvents($event_count) {
    // Pull event JSON, decode, and set date formatting
    $event_json = file_get_contents('https://discourse.ubuntu.com/discourse-post-event/events.json?include_details=true');
    $event_content = json_decode($event_json,true);
    $date_format = "d M Y";

    foreach (array_slice($event_content['events'], 0, $event_count) as $events) {
      if ($events["name"] == "SAMPLE" || $events["name"] == "TEST") {
      } else {
      echo '
        <div class="col-4">
            <div class="p-card">
                <div class="p-card__content">
                    <img class="p-card__image card-frame" alt="" style="object-fit: cover;" ';
                    if ($events['uploaded_background_dark']['url'] == "") {
                      echo "src='img/event-thumbnail.png'>";
                    }
                    else {
                      echo 'src="https:' . $events['uploaded_background_dark']['url'] . '">';
                    }
                    echo '
                    <h4>
                        <a href="https://discourse.ubuntu.com' . $events["post"]["url"] . '">' . $events["post"]["topic"]["title"] . '</a>
                    </h4>
                    <p>' . date_format(date_create($events["starts_at"]), $date_format) . '</p>
                    <p class="u-no-padding--bottom text-ellipsis"><strong>Created by: </strong><a href="https://discourse.ubuntu.com/u/' . $events["creator"]["username"] . '">' . $events["creator"]["username"] . '</a></p>
                    <a class="p-button--brand" href="https://discourse.ubuntu.com' . $events["post"]["url"] . '">Learn More</a>
                </div>
              </div>
          </div>';
        }
    }
}

// Pull and echo LoCo teams from categories jsonm
function showLoCos($loco_count) {
    // Pull category JSON and decode
    $loco_json = file_get_contents('https://discourse.ubuntu.com/categories.json?include_subcategories=true');
    $loco_content = json_decode($loco_json,true);

    foreach (array_slice($loco_content['category_list']['categories'][7]['subcategory_list'], 0, $loco_count) as $locos) {
      if ($locos["name"] == "LoCo Documentation" || $locos["name"] == "LoCo Support") {
      } else {
      echo '
        <div class="col-4">
            <div class="p-card">
                <div class="p-card__content">
                    <img class="p-card__image card-frame" alt="" style="object-fit: cover;" ';
                    if ($locos['uploaded_background_dark']['url'] == "") {
                      echo "src='img/loco-thumbnail.png'>";
                    }
                    else {
                      echo 'src="https:' . $locos['uploaded_background_dark']['url'] . '">';
                    }
                    echo '
                    <h4>
                        <a href="#">' . $locos["name"] . '</a>
                    </h4>
                    <p class="u-no-padding--bottom text-ellipsis">' . $locos['HOLD'] . '</p>
                    <a class="p-button--brand" href="viewloco.php?id=' . $locos["slug"] . '&name=' . $locos["name"] . '">Join ' . $locos["name"] . '</a>
                </div>
              </div>
          </div>';
        }
      }
}

// Pull and echo index of Ubuntu Weekly News article topics
function showUWNindex() {
    // UWN Category JSON Decode
    $uwn_index_json = file_get_contents('https://discourse.ubuntu.com/c/uwn/124.json');
    $uwn_index_content = json_decode($uwn_index_json,true);
    // Display previous issue side panel
    foreach ($uwn_index_content['topic_list']['topics'] as $uwn) {
      if ($uwn["title"] == "About the Ubuntu Weekly News category" || $uwn["title"] == "Ubuntu Weekly Newsletter / Style Guidelines") {
      } else {
      echo "<li><a href='https://discourse.ubuntu.com/t/" . $uwn['slug'] . "'>" . $uwn['title'] . "</a></li>";
    }
  }
}

// Pull and echo most recent Ubuntu Weekly News article
function showUWNcurrent() {
    // UWN Category decode
    $uwn_issue_json = file_get_contents('https://discourse.ubuntu.com/c/uwn/124.json');
    $uwn_issue_content = json_decode($uwn_issue_json,true);
    $uwn_issue_slug = $uwn_issue_content['topic_list']['topics'][1]['slug'];
    $uwn_issue_id = $uwn_issue_content['topic_list']['topics'][1]['id'];

    // Pull and display current cooked article
    $article_json = file_get_contents('https://discourse.ubuntu.com/t/' . $uwn_issue_slug . '/' . $uwn_issue_id . '.json');
    $article_content = json_decode($article_json,true);
    $article_cooked = $article_content['post_stream']['posts'][0]['cooked'];
    echo $article_cooked;
}

function viewLoCo($loco_id) {
  // Display information about selected LoCo
  $loco_view_json = file_get_contents('https://discourse.ubuntu.com/c/locos/' . $loco_id . '.json');
  $loco_view_content = json_decode($loco_view_json,true);
  //$loco_desc = $loco_view_content['topic_list']['topics'][1]['excerpt'];
  //echo '<p>' . $loco_desc . '</p>';

  // Display About LoCo topic content
  $about_loco_slug = $loco_view_content['topic_list']['topics'][0]['slug'];
  $about_loco_id = $loco_view_content['topic_list']['topics'][0]['id'];
  $about_loco_json = file_get_contents('https://discourse.ubuntu.com/t/' . $about_loco_slug . '/' . $about_loco_id . '.json');
  $about_loco_content = json_decode($about_loco_json,true);
  $about_loco_cooked = $about_loco_content['post_stream']['posts'][0]['cooked'];
  $about_loco_image = $about_loco_content['topic_descriptions']['image_url'];
  echo $about_loco_cooked;
}
?>
