<?
include "templates.php";

$user = array(
  'username' => 'fabeschan', # github username
  'name' => 'Fabian Chan', # real name
  'title' => 'Software Developer', # job title
  'description' => '<p>Generic Description! Here are some projects as a result of my hobbies.</p>', # about you
  'postscript' => '<h2>How about this?</h2><p>To make your own one, fork this project and rename the repository &lt;yourname&gt;.github.com</p>', # postscript after projects
);

$projects = array(
  # <projectname> => data array
  'GenomeSequences' => array(
    'description' => 'Maximal Matches in Genome Sequences',
    'longdescription' => 'Locate matches between two string representations of genome sequences of minimal edit distance. Maximal Matches in O(n) Time. Edit Distance Aligner in O(n) Space. (ECE358 Project)',
    'github' => 'fabeschan/genomesequences',
    'submodule' => False, # has submodule. default is False
    'cocoapod' => False, # has cocoapod. default is False
    'minor' => False, # is minor project. default is False
    'open' => array('type' => 'edit_n_make', 'file' => 'data.php'), # project opener
  ),

  # <projectname> => data array
  'StringToWav' => array(
    'description' => 'String to wav music converter',
    'longdescription' => 'A fun project to turn a string into music. Supports polymelodic compositions',
    'github' => 'fabeschan/stringtowav',
    'submodule' => False, # has submodule. default is False
    'cocoapod' => False, # has cocoapod. default is False
    'minor' => False, # is minor project. default is False
    'open' => array('type' => 'edit_n_make', 'file' => 'data.php'), # project opener
  ),

  # <projectname> => data array
  'Github-Profile' => array(
    'description' => 'Github profile generator based on manual input data.', # project description
    'github' => 'fabeschan/github-profile', # github identifier
    'submodule' => False, # has submodule. default is False
    'cocoapod' => False, # has cocoapod. default is False
    'minor' => False, # is minor project. default is False
    'open' => array('type' => 'edit_n_make', 'file' => 'data.php'), # project opener
    'links' => array(
      array('title' => 'Project page', 'link' => 'fabeschan.github.com/github-profile'), # links on right-aside
    ),
    'downloads' => array( # download buttons
      array('title' => 'Tar ball', 'link' => 'https://github.com/fabeschan/github-profile/tarball/master'), # title and link is required
      array('title' => 'Zip ball', 'link' => 'https://github.com/fabeschan/github-profile/zipball/master', 'download' => 'Download'), # 'download' is additional title. default is 'Download'
    ),
  ),
);
