<?php

//

include "/var/www/relayo.com/includes/config2.php";

// set item array

$items = array(
  "experts" => array(
    "label" => "name",
    "table" => "experts",
    "count" => "total_experts",
    "udate" => "update_experts"
  ),
  "blog" => array(
    "label" => "title",
    "table" => "blog",
    "count" => "total_blogs",
    "udate" => "update_blogs"
  ),
  "gigs" => array(
    "label" => "title",
    "table" => "gigs",
    "count" => "total_gigs",
    "udate" => "update_gigs"
  )
);

// set location item array

$location_items = array("experts", "gigs");

//

$domtree = "";
$xmlRootNode = "";
$linkcount = 0;
$filecount = 1;
$urlcount = 50000;
$savefile1 = "/var/www/relayo.com/sitemap";
$savefile2 = "/var/www/relayo.com/sitemapindex.xml";

// create dom

$domtree = new DOMDocument('1.0', 'UTF-8');
$domtree->formatOutput = true;
$domtree->preserveWhiteSpace = false;

// create root element and append it to the document created

$xmlRootNode = $domtree->appendChild($domtree->createElement('urlset'));
$xmlRootNode->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

// create static pages

// home

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// category

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/category/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// location

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/location/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// experts

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/experts/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// gigs

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/gigs/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// requests

/*
$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/requests/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;
*/

// blog

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/blog/'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// about

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/about-us.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// contact

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/contact-us.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// faq

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/faq.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// register

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/registration.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// terms

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/terms-condition.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// privacy

$currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
$urlNode = $currentUrlNode->appendChild($domtree->createElement('loc', 'https://www.relayo.com/privacy-policy.php'));
$lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', date('c')));
$frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'yearly'));
$priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
$linkcount++;

// loop through items

foreach ($items as $item => $value)
{
  // detail pages

  $query_page = "SELECT id, " . $value['label'] . " AS label, udate FROM " . $value['table'] . " WHERE status = 1 ORDER BY " . $value['label'];
  $result_page = $con->select($query_page);

  //

  while ($row = $result_page->fetch_assoc())
  {
    // create url node and append to root

    $currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
    $page_id = $row['id'];
    $page_label = fix($row['label']);
    $page_date = $row['udate'];
    $page_date_obj = new DateTime($page_date);
    $page_date_lastmod = $page_date_obj->format('Y-m-d\TH:i:sP');
    $url = "https://www.relayo.com/$item/$page_id/$page_label.htm";

    // add url children and data

    $urlNode = $currentUrlNode->appendChild($domtree->createElement('loc'));
    $urlNode->appendChild($domtree->createTextNode($url));
    $lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', $page_date_lastmod));
    $frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
    $priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
    $linkcount++;

    // check if file is too large, split if necessary

    if ($linkcount / $filecount >= $urlcount)
    {
      splitFile();
    }
  }

  //

  $result_page->close();

  // category pages

  $query_category = "SELECT id, name, " . $value['udate'] . " AS udate FROM categories WHERE " . $value['count'] . " > 0 AND status = 1 ORDER BY name";
  $result_category = $con->select($query_category);

  //

  while ($row = $result_category->fetch_assoc())
  {
    // create url node and append to root

    $currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
    $cat_id = $row['id'];
    $cat_name = fix($row['name']);
    $cat_date = $row['udate'];
    $cat_date_obj = new DateTime($cat_date);
    $cat_date_lastmod = $cat_date_obj->format('Y-m-d\TH:i:sP');
    $url = "https://www.relayo.com/$item/category/$cat_id/$cat_name.htm";

    // add url children and data

    $urlNode = $currentUrlNode->appendChild($domtree->createElement('loc'));
    $urlNode->appendChild($domtree->createTextNode($url));
    $lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', $cat_date_lastmod));
    $frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
    $priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
    $linkcount++;

    // check if file is too large, split if necessary

    if ($linkcount / $filecount >= $urlcount)
    {
      splitFile();
    }
  }

  //

  $result_category->close();

  // location pages

  if (in_array($item, $location_items))
  {
    $query_location = "SELECT id, name, combined, " . $value['udate'] . " AS udate FROM locations WHERE " . $value['count'] . " > 0 AND status = 1 ORDER BY name";
    $result_location = $con->select($query_location);

    //

    while ($row = $result_location->fetch_assoc())
    {
      // create url node and append to root

      $currentUrlNode = $xmlRootNode->appendChild($domtree->createElement('url'));
      $loc_id = $row['id'];
      $loc_name = fix($row['combined']);
      $loc_date = $row['udate'];
      $loc_date_obj = new DateTime($loc_date);
      $loc_date_lastmod = $loc_date_obj->format('Y-m-d\TH:i:sP');
      $url = "https://www.relayo.com/$item/location/$loc_id/$loc_name.htm";

      // add url children and data

      $urlNode = $currentUrlNode->appendChild($domtree->createElement('loc'));
      $urlNode->appendChild($domtree->createTextNode($url));
      $lastmodNode = $currentUrlNode->appendChild($domtree->createElement('lastmod', $loc_date_lastmod));
      $frequencyNode = $currentUrlNode->appendChild($domtree->createElement('changefreq', 'daily'));
      $priorityNode = $currentUrlNode->appendChild($domtree->createElement('priority', '0.5'));
      $linkcount++;

      // check if file is too large, split if necessary

      if ($linkcount / $filecount >= $urlcount)
      {
        splitFile();
      }
    }

    //

    $result_location->close();
  }
}

// print the xml

$domtree->save($savefile1 . $filecount . '.xml');

// compress file

gzCompressFile($savefile1 . $filecount . '.xml');

// create dom

$domtree = new DOMDocument('1.0', 'UTF-8');
$domtree->formatOutput = true;
$domtree->preserveWhiteSpace = false;

// create root element and append it to the document created

$xmlRootNode = $domtree->appendChild($domtree->createElement('sitemapindex'));
$xmlRootNode->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

// loop through xml files and create index

for ($i = 0; $i < $filecount; $i++)
{
  $sitemapLocation = "sitemap$filecount.xml.gz";
  $currentSitemapNode = $xmlRootNode->appendChild($domtree->createElement('sitemap'));

  // add location

  $locationNode = $currentSitemapNode->appendChild($domtree->createElement('loc', "https://www.relayo.com/$sitemapLocation"));

  // add lastmod

  $lastmodNode = $currentSitemapNode->appendChild($domtree->createElement('lastmod', date('c')));
}

// print the xml

$domtree->save($savefile2);

//

function fix($str, $limit = 80)
{
  $str = str_replace(' ', '-', $str);
  $str = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower($str));
  $str = preg_replace('/-+/', '-', $str);
  $str = substr($str, 0, $limit);
  $str = trim($str, '-');
  $str = trim($str);

  //

  return $str;
}

//

function fix2($str)
{
  $str = preg_replace('/[\']/', '', $str);
  $str = preg_replace('/[^\pL0-9\-]+/u', '-', $str);
  $str = preg_replace('/-{2,}/', '-', $str);
  $str = trim($str, '-');
  $str = strtolower($str);

  //

  return $str;
}

//

function gzCompressFile($source, $level = 9)
{ 
  $dest = $source . '.gz'; 
  $mode = 'wb' . $level; 
  $error = false; 

  //

  if ($fp_out = gzopen($dest, $mode))
  { 
    if ($fp_in = fopen($source, 'rb'))
    { 
      while (!feof($fp_in))
      {
        gzwrite($fp_out, fread($fp_in, 1024 * 512)); 
      }

      //

      fclose($fp_in); 
    }
    else
    {
      $error = true; 
    }

    //

    gzclose($fp_out); 
  }
  else
  {
    $error = true; 
  }

  //

  if ($error)
  {
    return false; 
  }
  else
  {
    return $dest; 
  }
} 

//

function splitFile() 
{
  // print the xml

  $domtree->save($savefile1 . $filecount . '.xml');

  // compress the old file

  gzCompressFile($savefile1 . $filecount . '.xml');

  // create dom

  $domtree = new DOMDocument('1.0', 'UTF-8');
  $domtree->formatOutput = true;
  $domtree->preserveWhiteSpace = false;

  // create root element and append it to the document created

  $xmlRootNode = $domtree->appendChild($domtree->createElement('urlset'));
  $xmlRootNode->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

  //

  $filecount++;
}
