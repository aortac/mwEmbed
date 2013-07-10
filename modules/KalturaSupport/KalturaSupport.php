<?php
	// Return the KalturaSupport modules 
	return array(
		"mw.KalturaIframePlayerSetup" =>  array( 
			'scripts' => "resources/mw.KalturaIframePlayerSetup.js",
			'dependencies' => array(
				'mw.MwEmbedSupport'
			),
			'kalturaLoad' => 'always'
		),
		"mw.KWidgetSupport" => array( 
			'scripts' => "resources/mw.KWidgetSupport.js",
			'dependencies' => array(
				'base64_encode',				
				'mw.KApi',
				'mw.KDPMapping',
				'mw.KCuePoints'
			),
			'kalturaLoad' => 'always',
			'messageFile' => 'KalturaSupport.i18n.php'
		),
		"mw.KBaseComponent" => array(
			'scripts' => "resources/mw.KBaseComponent.js",
			'dependencies' => array( 'mw.KBasePlugin' )
		),		
		"mw.KBasePlugin" => array(
			'scripts' => "resources/mw.KBasePlugin.js",
			'dependencies' => array( 'class' )
		),
		"mw.KCuePoints"=> array( 
			'scripts' => "resources/mw.KCuePoints.js" 
		),
		"mw.KTimedText"=> array( 
			'scripts' => "resources/mw.KTimedText.js" 
		),
		"mw.KAnalytics"=> array( 
			'scripts' => "resources/mw.KAnalytics.js"
		),
		"mw.PlaylistHandlerKaltura"=> array( 
			'scripts' => "resources/mw.PlaylistHandlerKaltura.js",
			'dependencies' => array(
				'mw.MwEmbedSupport'
			)
		), 
		"mw.KDPMapping"=> array(
			'scripts' => "resources/mw.KDPMapping.js" 
		),
		"mw.KApi"=> array(
			'scripts' => "resources/mw.KApi.js", 
			'dependencies' => array(
				'MD5'
			)	
		),
		"mw.KAds"=> array( 
			'scripts' => "resources/mw.KAds.js",
			'dependencies' => array(
				"mw.AdTimeline",
				"mw.KAdPlayer"
			)
		),
		"mw.KAdPlayer"=> array( 
			'scripts' => "resources/mw.KAdPlayer.js" 
		),
		/* Layout Container */
		"controlBarContainer" => array(
			'scripts' => "components/controlBarContainer.js",
			'dependencies' => 'mw.KBasePlugin',
			'kalturaLoad' => 'always'
		),
		/** 
		 * Layout Components 
		 **/
		"largePlayBtn" => array(
			'scripts' => "components/largePlayBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'kalturaPluginName' => 'largePlayBtn',
		),	
		"playPauseBtn" => array(
			'scripts' => "components/playPauseBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'kalturaPluginName' => 'playPauseBtn',
		),
		"fullScreenBtn" => array(
			'scripts' => "components/fullScreenBtn.js",
			'dependencies' => 'mw.KBaseComponent',
			'kalturaPluginName' => 'fullScreenBtn',
		),
		"playHead" => array(
			'scripts' => "components/playHead.js",
			'dependencies' => 'mw.KBaseComponent',
			'kalturaPluginName' => 'playHead',
		),
		"volumeControl" => array(
			'scripts' => "components/volumeControl.js",
			'dependencies' => 'mw.KBaseComponent',
			'kalturaPluginName' => 'volumeControl',
		),

		"pptWidgetPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/pptWidgetPlugin.js",
			'kalturaPluginName' => 'pptWidgetAPI'
		),

		/* playlist */
		"playlistPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/playlistPlugin.js", 
			'dependencies' => array(
				// core playlist module
				"mw.Playlist",
				// kaltura specific playlist modules
				'mw.PlaylistHandlerKaltura',
				// support playlist layout
				'mw.KLayout'
			),
			'kalturaPluginName' => 'playlistAPI'
		),
		
		/* uiConf based plugins */
		"acCheck" => array(
			'scripts' => "resources/uiConfComponents/acCheck.js",
			// We always should load access controls since 
			// it can be invoked per entry . 
			'kalturaLoad' => 'always'
		),
		"acPreview"=> array( 
			'scripts' => "resources/uiConfComponents/acPreview.js",
			// We always should load access controls since 
			// it can be invoked per entry 
			'kalturaLoad' => 'always'
		),
		"bumperPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/bumperPlugin.js",
			'dependencies' => array( 'mw.KAds' ),
			'kalturaPluginName' => 'bumper'
		),
		"captionPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/captionPlugin.js",
			'dependencies' => array( 
				"mw.KTimedText"
			),
			'kalturaPluginName' => array( 
				'closedCaptions', 
				'closedCaptionsUnderPlayer',
				'closedCaptionsOverPlayer',  
				'closedCaptionsFlexible'
			)
		),
		"captureThumbnailPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/captureThumbnailPlugin.js",
			'kalturaPluginName' => 'captureThumbnail' 
		),
		"carouselPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/carouselPlugin.js",
			'dependencies' => array( 'jCarouse' ),
			'kalturaPluginName' => array(
				'related',
				'carousel'
			)
		),
		"faderPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/faderPlugin.js", 
			'kalturaLoad' => 'always'
		),
		"likeAPIPlugin" => array(
			'scripts' => "resources/uiConfComponents/likeAPIPlugin.js", 
			'kalturaPluginName' => 'likeAPI'
		),
		"liveStreamPlugin" => array(
			'scripts' => "resources/uiConfComponents/liveStream.js",
			'styles' => "resources/uiConfComponents/liveStream.css",
			'kalturaLoad' => 'always'
		),
		"myLogo"=> array( 
			'scripts' => "resources/uiConfComponents/myLogo.js",
			'kalturaPluginName' => array( 'mylogo', 'kalturaLogo' )
		),
		"titleLayout"=> array( 
			'scripts' => "resources/uiConfComponents/titleLayout.js",
			'dependencies' => array(
				'mw.KLayout'
			),
			'kalturaPluginName' => 'topTitleScreen'
		),
		"gigyaPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/gigyaPlugin.js", 
			'kalturaPluginName' => 'gigya'
		),		
		"shareSnippet"=> array( 
			'scripts' => "resources/uiConfComponents/shareSnippet.js", 
			'kalturaPluginName' => 'shareSnippet'
		),
		"moderationPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/moderationPlugin.js",
			'kalturaPluginName' => 'moderation'
		),
		"downloadPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/downloadPlugin.js",
			'kalturaPluginName' => "download"
		),
		"jCarouse"=> array( 
			'scripts' => "resources/uiConfComponents/jcarousellite_1.0.1.js" 
		),
		"mw.KLayout"=> array( 
			'scripts' => "resources/mw.KLayout.js" 
		),
		"restrictUserAgentPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/restrictUserAgentPlugin.js",
			'kalturaPluginName' => 'restrictUserAgent' 
		),
		"segmentScrubberPlugin" => array(
			'scripts' => "resources/uiConfComponents/segmentScrubberPlugin.js",
			'kalturaPluginName' => 'segmentScrubber',
		),
		"statisticsPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/statisticsPlugin.js",
			'dependencies' => array( 'mw.KAnalytics' ), 
			'kalturaPluginName' => 'statistics'
		),
		'playbackRateSelectorPlugin' => array(
			'scripts' => "resources/uiConfComponents/playbackRateSelector.js",
			'kalturaPluginName' => 'playbackRateSelector'
		),
		"watermarkPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/watermarkPlugin.js",
			'kalturaPluginName' => 'watermark'
		),
		"vastPlugin"=> array( 
			'scripts' => "resources/uiConfComponents/vastPlugin.js",
			'dependencies' => array(
				"mw.KAds"
			),
			'kalturaPluginName' => 'vast'
		),
	);