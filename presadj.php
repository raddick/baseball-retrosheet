<TITLE>Inherited Runners</TITLE>
<link rel="stylesheet" type="text/css" href="https://www.retrosheet.org/menubar/menubar.css">
<script type="text/javascript" src="https://www.retrosheet.org/menubar/menubar.js"></script>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"><!----- main table ----->
<META content="MSHTML 6.00.2600.0" name=GENERATOR></HEAD>
<BODY>
<!--#include virtual="/menubar/menubar.htm" -->

<p><b><span style='font-size:18.0pt;line-height:107%'>Retrosheet and Inherited runners</b></span></p>
<p>David W. Smith, December, 2022</p>

<p>When pitchers are changed with runners on base, modern baseball analysis refers to them as "inherited runners". By current scoring rules, any such runners who score are charged to the pitcher who put them on base, not the reliever. However, this has not always been the case. The rule concerning inherited runners can be divided into three chronological periods. Working backwards, they are:</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>


<blockquote>
<p><b><span style='font-size:18.0pt;line-height:107%'>1950 to
present</span></b></p>

<p>The current text of rule 9.16(g) is:</p>

<p>"When pitchers are changed during an inning, the Official
Scorer shall not charge the relief pitcher with any run (earned or unearned)
scored by a runner who was on base at the time such relief pitcher entered the
game, nor for runs scored by any runner who reaches bases on a fielder's choice
that puts out a runner left on base by any preceding pitcher."</p>

<p>This language is somewhat
modified from the original 1950 version, but the consequences are the same. As the current rule book notes in a comment:</p>

<p>"It is the intent of Rule 9.16(g) to charge each pitcher with the number of runners he put on base, rather than with the individual runners." The comment continues with more details and seven examples of situations in which responsibility for a runner is transferred from a relief pitcher to a previous pitcher although it
is silent on how double plays are to be treated.</p>

<p>The numbering of the rule has
changed over the years as the rule book underwent several modifications following the major overhaul in 1950. It began as 10.15(f), became 10.18(i) for many years and is now 9.16(g) after the significant
reorganization and renumbering of the rule book in December of 2014.</p>

<p><b><span style='font-size:18.0pt;line-height:107%'>1940 to
1949</span></b></p>

<p>The first mention of inherited runners (without the
use of that term, however) was in 1940 when the following text was added to
Rule 44:</p>

<p>"The preceding pitcher, and not a relieving pitcher, shall be
charged with runs scored by any runners on base when such relief pitcher
entered the game."</p>

<p>The rule book had a completely different organization prior to 1950, so that Rule 44 is the relevant one here. Of note is that there is no mention of transferring responsibility from a relief pitcher to a previous pitcher due to a fielder's choice.</p>

<p><b><span style='font-size:18.0pt;line-height:107%'>Prior to 1940</span></b></p>

<p>There is no mention of inherited runners in the rule book during this period. Official Scorers were granted wide discretion to charge runs as they saw
fit, sometimes in ways that differ significantly from the current rule.</p>

<p>The Retrosheet software, written in 1988, has up to now applied
the current rule and as the organization continued to progress backward through time, many instances were encountered in which run assignments differed from the
officially recorded values. These differences were recorded as discrepancies (See <a
href="https://www.retrosheet.org/game.htm#Discrepancy%20Files">https://www.retrosheet.org/game.htm#Discrepancy%20Files</a>
). In particular, we found an increasing number of these disagreements as we moved prior to 1920. Here are the totals for 1914 - 1919.</p>

<pre>
    1914:   145
    1915:   101
    1916:    55
    1917:    40
    1918:    14
    1919:    13
</pre>

<p>We have play by play accounts for only about two thirds of
games in this era at this time, so it is almost certain that more cases will be
encountered.</p>

<p>Retrosheet files undergo very strict proofing before release
with comparison to the official totals for each player on a game-by-game basis. A primary guiding principle has been that we try to have the events in our files match the official totals whenever it is feasible. Having runs assigned correctly is a central part of this proofing. Nonetheless, we have been left with thousands of differences between our data and the official totals which we have termed discrepancies.</p>

<p>In the light of the increasing number of these inherited
runner differences, the decision was made in the fall of 2022 to adjust our
software so that our files would come into compliance with the official totals
much more completely. To that end, we created a new record type, called <b><i>presadj</b></i> for "pitcher responsibility adjustment". The
use of this record is detailed in the newly revised description of how to use
our event files (<a href="https://www.retrosheet.org/eventfile.htm">https://www.retrosheet.org/eventfile.htm</a>). As a result, we have removed hundreds of
previously recorded discrepancies. In order to match the official records to the greatest degree possible, we have inserted presadj records into numerous files, most of them before 1950. Those who write their own programs to extract information
from our event files must be aware of this change in order to get proper results.</p>

<p>Many readers will be aware that precise procedures for determining winning and losing pitchers were only codified in 1950. During the checking process to insert presadj records, I discovered some cases of a pitcher being charged with a loss in the official records while the same records indicated that he allowed zero runs! One example occurred on June 26, 1915 (<a
href="https://www.retrosheet.org/boxesetc/1915/B06260CHN1915.htm">https://www.retrosheet.org/boxesetc/1915/B06260CHN1915.htm</a>) when Hippo Vaughn of the Cubs, started the game, pitched one third of an inning, was charged with no runs but got the loss to the Cardinals. This is certainly incongruous now and it did not happen often, but it does show the wider historical impact of the issue of inherited runners.</p>

<p>At this time, the only seasons on our website with presadj records are 1914 and 1915. Work on more recent seasons is underway and
will be completed for the summer release in 2023.</p>

<p>To illustrate the general point more completely, the entire
first inning of Vaughn's game is included below, with additional comments
added.</p>

<blockquote>
<pre>
play,1,0,butla101,??,,S9
play,1,0,bescb101,??,,W.1-2
play,1,0,milld102,??,,S7.2XH(7142);1-3;B-2
com,"$Butler held at 3rd, but Bescher ran to 3rd so Butler"
com,"took off and was run down"
play,1,0,longt102,??,,NP
sub,zabez101,"Zip Zabel",1,9,1
ZIP ZABEL ENTERED THE GAME WITH ONE OUT, RUNNERS ON 2B & 3B, AND NO RUNS SCORED YET.

play,1,0,longt102,??,,W
presadj,zabez101,3
play,1,0,dolac102,??,,7/SF.3-H;2-3;1-2
UNDER MODERN RULES, BESCHER'S RUN WOULD HAVE BEEN CHARGED TO VAUGHN
THE SCORER AT THE TIME CHARGED THIS RUN TO ZABEL.
THE PRESADJ RECORD SHIFTS RESPONSIBILITY FOR THE RUNNER ON 3B (BESCHER) TO ZABEL.

play,1,0,hyath101,??,,W
presadj,zabez101,3
play,1,0,beckz101,??,,W.3-H;2-H(E2)(NR)(UR);1-2
com,"$Long kept running past 3rd, catcher threw behind him"
com,"but dropped return throw so Long scored"
AGAIN, UNDER MODERN RULES, MILLER'S RUN WOULD HAVE BEEN CHARGED TO VAUGHN
BUT WAS INSTEAD CHARGED TO ZABEL AT THE TIME.
LONG (THE RUNNER ON 2B) WAS ALREADY ZABEL'S RESPONSIBILITY.

play,1,0,snydf101,??,,5(2)/FO
</pre>
</blockquote>

<p>We are all used to the idea that runs allowed are the determining factor in wins and losses, but as we can see
here, that has not always been the case. Apparently, the Official Scorer decided that Vaughn's performance was so poor that he deserved the loss, no matter which
pitcher was charged with the runs.</p>

<p>Note that these changes will change
the ERA for many pitchers.</p>

<hr>

<p align="CENTER">All data contained at this site is copyright 1996-2022 by Retrosheet. All Rights Reserved.</p>
<p align="CENTER"><a href="https://www.retrosheet.org/notice.txt">Click here for information about the use of Retrosheet data</a></p>


Send comments and suggestions to Tom Thress:
tthress-ATsign-retrosheet.org. (Replace -ATsign- with @) Please start your subject line with 
"Retrosheet: "
<p></p><p></p><hr><p></p>

</body></html>