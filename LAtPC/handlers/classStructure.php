<?php 
class Structure		{
	// Declare properties to avoid dynamic property creation warnings
	public string $dir;
	public string $lang;
	public string $title;

	public function __construct($dir, $lang, $title)
	{
		$this->dir = $dir;
		$this->lang = $lang;
		$this->title = $title;
	}

	public function getLang()
	{
		// Return the language code based on the object's lang property
		if ($this->lang == 'english') {
			return 'en';
		} elseif ($this->lang == 'español') {
			return 'es-419';
		} else {
			// Default to English
			return 'en';
		}
	}

	public function getDir()
	{
		return $this->dir;
	}

	public function getTitle()
	{
		return $this->title;
	}
}

?>