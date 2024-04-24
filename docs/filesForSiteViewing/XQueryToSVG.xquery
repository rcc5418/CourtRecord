declare variable $xSpacer := 350;
declare variable $ySpacer := 200;
declare variable $ySpacerMini := 100;
declare variable $colors := ("red", "green", "blue", "purple", "green", "pink", "yellow");

declare variable $aceColl := collection('corpus-xml/?select=*.xml');
declare variable $phoenixLines := $aceColl//line[@speaker="Phoenix"];

declare variable $svgEpisode :=
<svg width="60000" height="1500" viewBox="0 0 2000 3000" xmlns="http://www.w3.org/2000/svg">
<desc>Phoenix Line data for episode</desc>
    <g id="wholePlot" transform="translate(50, 1500)">
    {for $ep at $pos in $aceColl
        let $bottomTitle := $ep//Q{}title ! normalize-space()
        let $title := tokenize(base-uri($ep), "/")[last()]
        let $parts := tokenize($title, "_-_")
        let $title := $parts[1]
        let $part :=
            if (contains($parts[3], "Part_"))
            then concat(" - Part ", substring-before(substring-after($parts[3], "Part_"), ".xml"))
  else ()
        let $epTitle := concat($title, $part)
        
        (:--let $epTitle := $ep//Q{}title ! normalize-space():)
        let $epPhoenixLines := $ep//Q{}line[@speaker="Phoenix"] => count()
        where $epPhoenixLines > 0
            order by $epPhoenixLines descending
            return
                <g id="{$epTitle}">
                    <text font-size="2em" x="{$xSpacer * $pos - 25}" y="50"  transform="rotate(-90 {$xSpacer * $pos - 25},50)">{$epTitle}</text>
                    <!--<text font-size="2em" x="{$xSpacer * $pos}" y="50">{$bottomTitle}</text>-->
                    <g class="lineInfo">
                        <desc>{$epTitle}, {$epPhoenixLines}</desc>
                        <line stroke="{$colors[$pos mod 6 + 1]}" x1="{$pos * $xSpacer + 35}" x2="{$pos * $xSpacer + 35}" y1="0" y2="-{$epPhoenixLines}" style="stroke-width:70"/>
                        <text font-size="2em" x="{$xSpacer * $pos}" y="-{$epPhoenixLines + 25}">{$epPhoenixLines}</text>
                    </g>
                </g>
    }
    </g>
</svg>;
declare variable $sortedEpisodesByLines :=
    for $ep at $pos in $aceColl
        let $epTitle := $ep//Q{}title ! normalize-space()
        let $totalLines := $ep//Q{}line[@speaker="Phoenix"] => count()
        where $totalLines > 0
            order by $totalLines descending
            return $ep;
declare variable $svgEpisode2 :=
<svg width="1500" height="19000" viewBox="0 0 1700 23250" xmlns="http://www.w3.org/2000/svg">
    <desc>Get data for each episode about how many lines Phoenix has</desc>
    
   <g id="wholePlot" transform="translate(50, 50)">
   <text x="0" y="50" text-anchor="start" font-size="45" textLength="480" fill="black" stroke="blue">Phoenix Lines per Episode</text>
    {for $ep at $pos in $sortedEpisodesByLines
        (:let $epTitle := $ep//Q{}title ! normalize-space():)
        let $title := tokenize(base-uri($ep), "/")[last()]
        let $parts := tokenize($title, "_-_")
        let $title := $parts[1]
        let $part :=
            if (contains($parts[3], "Part_"))
            then concat(" - Part ", substring-before(substring-after($parts[3], "Part_"), ".xml"))
  else ()
        let $epTitle := concat($title, $part)
        let $epIdentifier := $ep ! base-uri() ! tokenize(., '/')[last()] ! substring-before(., '.xml')
        let $totalLines := $ep//Q{}line[@speaker="Phoenix"] => count()
        where $totalLines > 0
            order by $totalLines descending
            
            return
            <g id="{$epIdentifier ! replace(., '[ ,;]', '') ! replace(., '%\d+' ,'')}">
                <desc>Total lines in this episode? {$totalLines}</desc>
                <text x="0" y="{$pos * $ySpacer - 50}" font-size="25">{$epTitle}</text>
                <line stroke="{$colors[$pos mod 6 + 1]}" x1="{0}" x2="{$totalLines}" y1="{$pos * $ySpacer}" y2="{$pos * $ySpacer}" style="stroke-width:70"/>
                <text x="{$totalLines + 25}" y="{$pos * $ySpacer}">{$totalLines}</text>
               
            </g>
    }
   </g>
</svg>;
$svgEpisode2