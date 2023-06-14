<TITLE>Game Files</TITLE>
<link rel="stylesheet" type="text/css" href="https://www.retrosheet.org/menubar/menubar.css">
<script type="text/javascript" src="https://www.retrosheet.org/menubar/menubar.js"></script>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"><!----- main table ----->
<META content="MSHTML 6.00.2600.0" name=GENERATOR></HEAD>
<BODY>
<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/header.php'; ?>

<h2>Retrosheet Game Files</h2>

Retrosheet's foundational data product is the <a href=https://www.retrosheet.org/eventfile.htm>event file</a> (.evx files), which provides play-by-play detail for a baseball game. Retrosheet's goal continues to be to generate and distribute event files for every game in major-league history. Several years (decades?) ago, Retrosheet added a second file format type, box-score event files (.ebx files), which provide box-score level data for games. Initially, box-score event files were created only for games for which Retrosheet had not yet released event files. Over time, however, as Retrosheet introduced more event files, there is now a significant overlap of games for which Retrosheet has released both event and box-score files. For the most part, box-score event files have been viewed by Retrosheet as merely an intermediate step toward developing event files with event files generally superseding box-score files in cases where both exist.

<br><br>

While Retrosheet's event files are the gold standard in terms of providing game-level information, they have their limitations. First and foremost, they are not available for all games - although this limitation becomes progressively less with each Retrosheet release. But second, event files may not be an ideal format for all baseball researchers (and fans). One can compile game-level statistics from event files - and Retrosheet and others <a href=https://www.retrosheet.org/resources1.html>have parsers available</a> to do so. But for people whose interest is more in the fact that Ty Cobb went 2-for-4 in a particular game than in details about each of Cobb's four at-bats, something more like Retrosheet's box-score file format may be more accessible.

<br><br>

Retrosheet's box-score event files also suffer from some limitations, however. First and foremost, they are not currently available for all games. In fact, Retrosheet currently has fewer box-score files available for download than event files. But in addition to the lack of box-score files - which is solvable in a fairly obvious way - the box-score file format may not be ideal. Box-score files are not well-documented and may not be intuitive. For example, batting lines (stat,bline) include 17 offensive statistics for each player as well as three additional fields of information, not counting the player's ID. Box-score files provide summary data for some events (home runs, stolen bases, double plays, et al.) but not for other events that people may be interested in (e.g., run-scoring details). The format is also fixed, making it potentially difficult to try to modify it in the future.

<br><br>

Retrosheet's solution, then, to these potential shortcomings is the (re-)introduction of a new(-ish) file format, called a game file (.egx). The purpose of the game file is to provide game-level information in a format that is readable, structured, and flexible. The game file format was first introduced for use with Negro League games. The format has been modified somewhat, however, to make it more readable and more flexible. Most importantly, game files have now been generated for all games for which Retrosheet has released box-score and/or event files.

<br><br>

The remainder of this page describes the game-file format in detail.

<hr>

<h4>Retrosheet Game Files</h4>

Like all Retrosheet files, game files are ASCII text files which should be readable in any text editor. The file consists of a series of records. Each record is on one line with fields separated by commas. Records may appear in any order within a game file. Any sequence information within record types is explicitly described in each record and is not implied by its order within the file. Game files may also include spaces between different record types to hopefully make them more readable.

<br><br>

Each game file begins with a line identifying the game id.

<br><br>

id,{GameID}

<br><br>

Retrosheet Game ID's take the form {TTTYYYYMMDDG}, where {TTT} is the 3-digit Retrosheet ID for the home team in the game; {YYYY}, {MM}, and {DD} refer to the year, month, and date on which the game was played, respectively; and {G} is used to distinguish between multiple games played on the same date (G=0 for a single game, G=1 and G=2 for the two games of a doubleheader).<br><br>

The second line will identify the file version

<br><br>

version,5

<br><br>

This distinguishes game files (version 5) from earlier file types.

<br><br>

Game-file records beginning on the third line can be any of the following types. These types are identified in the first column of the relevant record.

<br>

<blockquote>
<ul>
<li>info - game-level information which parallels "info" records within event files</li>
<li>line - line scores by team by inning</li>
<li>start - starting lineups</li>
<li>legend - identification of the fields associated with a specific stat or event record type</li>
<li>stat - compilation of game-level statistics for a player or team</li>
<li>inc - indication of which, if any, elements of a stat line may be missing or incomplete</li>
<li>event - summary information related to specific events within the game</li>
</ul>
</blockquote>

<br>

<b>info,...</b>

<br><br>

The info records that may be used within game files parallel those used in event and box-score files (although game files do not contain any info records related to the scoring of the game). The current list of valid info records includes the following. These records are discussed in more detail in our <a href=https://www.retrosheet.org/eventfile.htm#1>event-file documentation</a>.

<br><blockquote>

<ul>
<li>visteam</li>
<li>hometeam</li>
<li>site</li>
<li>date</li>
<li>number</li>
<li>starttime</li>
<li>daynight</li>
<li>timeofgame</li>
<li>attendance</li>
<li>innings</li>
<li>tiebreaker</li>
<li>usedh</li>
<li>htbf</li>
<li>gametype</li>
<li>oscorer</li>
<li>umphome</li>
<li>ump1b</li>
<li>ump2b</li>
<li>ump3b</li>
<li>umplf</li>
<li>umprf</li>
<li>fieldcond</li>
<li>precip</li>
<li>sky</li>
<li>temp</li>
<li>winddir</li>
<li>windspeed</li>
<li>wp</li>
<li>lp</li>
<li>save</li>
<li>gwrbi</li>
</ul>

</blockquote><br>

<b>line,...</b>

<br><br>

The line records report team line scores by inning. The format is fairly straightforward.

<br><br>
line,{Team},{runs scored by inning, delineated by commas}<br>
e.g., line,CHN,0,1,0,2,0,0,0,0,4
<br><br>

<b>start,...</b>

<br><br>

The starting lineups for each team are presented using the following format.

<br><br>
start,{RetroID},{Full Player Name},{Team},{Lineup Position},{Fielding Position}
<br><br>

For DH games, DH is fielding position "10" and the lineup position for the starting pitcher(s) is "0". In games where the starting pitcher is also the DH (the "Ohtani rule"), the relevant player (almost always Shohei Ohtani - RetroID 'ohtas001') will be listed twice in the starting lineup (at lineup position "0" for the pitcher version of the player).

<br><br>

<b>legend,...</b>

<br><br>

The 'legend' record identifies the fields associated with the record type indicated in the second field of the 'legend' record. For 'stat' and 'event' records, the fields in the legend record are exactly parallel to the records within the parallel 'stat' or 'event' record. In the case of the legend for starting lineups, the legend is off by one column.
<br><br>

i.e.,<br><br>
legend,start,id,name,team,lineup,field<br><br>
start,{id},{name},{team},{lineup},{field}

<br><br>

Several 'stat' and 'event' records have parallel structures. A single legend record is displayed in these cases.<br>

<ul>
<li>'stat,tmbline' parallels 'stat,bline'</li>
<li>'stat,tmpline' parallels 'stat,pline'</li>
<li>'stat,tmdline' parallels 'stat,dline'</li>
<li>'stat,dhline' parallels 'stat,phline'</li>
<li>'event,cs' parallels 'event,sb'</li>
<li>'event,pb' and 'event,bk' parallel 'event,wp'</li>
</ul>

<br>The event records 'dp' and 'tp' (double plays and triple plays) also parallel each other but do not have a 'legend' record associated with them. Their format is simply
<br><br>
event,{dp/tp}line,{team},{list of players involved in play, separated by commas}
<br><br>

<b>stat,...</b>

<br><br>

There are ten 'stat' records. These are summarized next and described in somewhat more detail thereafter.

<br>

<ul>
<li>bline - individual player batting lines</li>
<li>tmbline - team batting lines</li>
<li>pline - individual pitcher pitching lines</li>
<li>tmpline - team pitching lines</li>
<li>dline - individual player fielding lines</li>
<li>tmdline - team fielding lines</li>
<li>phline - pinch hitter lines</li>
<li>dhline - designated hitter lines</li>
<li>prline - pinch runner lines</li>
<li>tline - summary of some team-level data</li>
</ul>

<blockquote><b>stat,bline</b></blockquote><br>

The 'bline' record summarizes offensive statistics for a particular player. The exact structure of the 'bline' record is defined within the game files by the 'legend,bline' record, which is presented here for convenience.

<br><br>

legend,bline,id,team,lp,seq,ab,r,h,d,t,hr,rbi,sh,sf,hbp,w,iw,k,sb,cs,gidp,xi

<br><br>

Hopefully, most (if not all) of those abbreviations are self-explanatory: 'lp' is the player's lineup position, 'seq' is the order in which he appeared at that position (i.e., 'seq' = 1 for starters, 2 for the second player at a particular lineup position, etc.), 'xi' is catcher's interference. An intentional walk ("iw") is also counted as a walk ("w").

<br><br>

All players who appeared in a game get a 'bline' even if they were announced but did not actually appear in the game and even if they did not appear in the lineup (i.e., pitchers in DH games). The lineup position for players who did not appear in the lineup is zero.

<br>

<blockquote><b>stat,tmbline</b></blockquote><br>

The 'tmbline' record is identical to the 'bline' record except for an entire team. The fields which only make sense in the context of individual players (lineup position, sequence) are left blank in the 'tmbline' record.

<br>

<blockquote><b>stat,pline</b></blockquote><br>

The 'pline' record summarizes pitching statistics for a particular player. The exact structure of the 'pline' record is defined within the game files by the 'legend,pline' record, which is presented here for convenience.

<br><br>

legend,pline,id,team,seq,ip*3,no-out,bfp,h,d,t,hr,r,er,w,iw,k,hbp,wp,bk,sh,sf

<br><br>

Hopefully, most (if not all) of those abbreviations are self-explanatory: 'seq' is the order in which the pitcher appeared for his team (i.e., 'seq' = 1 for the starting pitcher, 2 for the second pitcher for a particular team, etc.), 'ip*3' is the number of outs recorded while the pitcher was pitching, 'no-out' is the number of batters faced by a pitcher in a pitcher's final inning if he failed to record any outs in that inning (this parallels the line such as 'Rogan pitched to three batters in the 7th' sometimes shown in box scores). The pitching stats should be self-explanatory ('bfp' is batters faced by pitcher, 'sh' and 'sf' are sacrifice hits and sacrifice flies allowed, respectively). An intentional walk ("iw") is also counted as a walk ("w").<br><br>

A pitcher who moves to a different position and then re-takes the mound will only receive a single 'pline', which presents all of the pitcher's statistics for the game; the 'seq' value for such a pitcher will reflect his first pitching appearance of the game.

<br><br>

Players only get a 'pline' record if they were credited with an official game pitched. Since 1976, a player who is announced into the game but leaves without having thrown a pitch (or pickoff attempt) is credited with a game played but not a game pitched. Such a player will receive a 'bline' record but not a 'pline' record.

<br>

<blockquote><b>stat,tmpline</b></blockquote><br>

The 'tmpline' record is identical to the 'pline' record except for an entire team. The fields which only make sense in the context of individual pitchers (e.g., sequence) are left blank in the 'tmpline' record.

<br>

<blockquote><b>stat,dline</b></blockquote><br>

The 'dline' record summarizes fielding statistics for a particular player. The exact structure of the 'dline' record is defined within the game files by the 'legend,dline' record, which is presented here for convenience.

<br><br>

legend,dline,id,team,seq,pos,if*3,po,a,e,dp,tp,pb

<br><br>

Hopefully, most (if not all) of those abbreviations are self-explanatory: 'seq' is the order in which the player played positions. That is, in this case, 'seq' is tied to the player, not the position. If a player plays 1B, then moves to LF, his 'seq' for his 1B 'dline' will be 1; his 'seq' value at LF will be 2. The record 'pos' indicates fielding position, which will be a numeric value between 1 and 9; 'if*3' is the number of outs recorded by his team while the player was playing this position.

<br><br>

Players get a separate 'dline' record for each fielding position they play. They only get a single 'dline' record for any given position, however, even if they change positions and then change back - e.g., if a player plays 1B, then LF, then returns to 1B, he will get two 'dline' records, one each for 1B and LF. The 'seq' value in a player's 'dline' will be based on the player's first appearance at the relevant fielding position.<br><br>

Players only receive a 'dline' record for a particular position if they are credited with an official game played. Since 1976, a player only gets credit for playing a fielding position if the player is on the field for at least one pitch (or one play). It is possible, therefore, for a player to be listed in the starting lineup at a given position but not get credit for having played the position if, for example, the player was replaced by a pinch runner in the top of the first inning.

<br>

<blockquote><b>stat,tmdline</b></blockquote><br>

The 'tmdline' record is identical to the 'dline' record except for an entire team. The fields which only make sense in the context of individual fielders (e.g., position) are left blank in the 'tmdline' record.

<br>

<blockquote><b>stat,phline</b></blockquote><br>

The 'phline' record provides information about a player's pinch-hitting appearance. The format of the 'phline' record is defined within the game files via the 'legend,phline' record, which is presented here for convenience.

<br><br>

legend,phline,id,inning,team,ab,r,h,d,t,hr,rbi,sh,sf,hbp,w,iw,k,sb,cs,gidp,xi

<br><br>

The offensive statistics presented in the 'phline' record exactly parallel the offensive statistics presented in the 'bline' record from 'ab' (at bats) onward.

<br>

<blockquote><b>stat,dhline</b></blockquote><br>

The 'dhline' record exactly parallels the 'phline' record but provides information about a player's offensive record while serving as his team's designated hitter. The 'inning' value in the 'stat,dhline' record is the inning at which a player first entered the lineup as his team's DH.<br><br>

The purpose of the 'dhline' record is to ensure that every player (who appeared in the game for at least one pitch) will have a 'bline' record as well as at least one additional record which identifies the position(s) played by the player - a 'dline', 'phline', 'dhline', and/or 'prline'.

<br>

<blockquote><b>stat,prline</b></blockquote><br>

The 'prline' record provides information about a player's pinch-running appearance. The format of the 'prline' record is defined within the game files via the 'legend,prline' record, which is presented here for convenience.

<br><br>

legend,prline,id,inning,team,r,sb,cs

<br><br>

<blockquote><b>stat,tline</b></blockquote><br>

The 'tline' record provides some team-level data. The 'stat,tline' record is a carryover from the box-score event file (.ebx) format. The format of the 'tline' record is defined within the game files via the 'legend,tline' record, which is presented here for convenience.

<br><br>

legend,tline,team,lob,er,dp,tp

<br><br>

Note that team earned runs may not equal the sum of the earned runs allowed by a team's pitchers due to the "team unearned run" rule, whereby a pitcher's earned runs are calculated without giving the pitcher credit for errors which occurred prior to his entering the game.

<br><br>

<b>inc,...</b>

<br><br>

The 'inc' record identifies the statistics within a particular 'stat' line which may be missing or incomplete. The 'inc' record exactly parallels the 'legend' and 'stat' records of the same name. Incomplete or missing statistics are identified with an "i"; statistics which are believed to be complete are left blank. There are 'inc' records associated with the stat records 'bline', 'pline', and 'dline'.

<br><br>

<b>event,...</b>

<br><br>

The 'event' records provide information about certain types of events within a game. There are 'event' records associated with the following events.

<br>

<ul>
<li>double plays - event,dpline</li>
<li>triple plays - event,tpline</li>
<li>hit-by-pitch - event,hpline</li>
<li>home runs - event,hrline</li>
<li>stolen bases - event,sbline</li>
<li>caught stealing - event,csline</li>
<li>wild pitches - event,wpline</li>
<li>passed balls - event,pbline</li>
<li>balks - event,bkline</li>
<li>errors - event,eline</li>
<li>run-scoring events - event,rline</li>
</ul>

<br>
The exact structure of the specific 'event' records are described next.

<br>
<blockquote><b>event,dpline</b></blockquote>
<br>

The format of the 'event,dpline' record is as follows.
<br><br>
event,dpline,{fielding team},{list of fielders involved in double play, separated by commas}
<br><br>

Because of the relative simplicity of the 'event,dpline' record, game files do not include a 'legend,dpline' record.

<br>
<blockquote><b>event,tpline</b></blockquote>
<br>

The format of the 'event,tpline' record exactly parallels the 'event,dpline' record, except for triple plays instead of for double plays.

<br>
<blockquote><b>event,hpline</b></blockquote>
<br>

The 'event,hpline' record shows details for hit-by-pitch events. The format of the 'event,hpline' record is defined within the game files via the 'legend,hpline' record, which is presented here for convenience.

<br><br>

legend,hpline,pitteam,pitcher,batter

<br><br>

The 'event,hpline' record is defense-centered, so the team shown is the pitching team for the hit-by-pitch event.

<br>
<blockquote><b>event,hrline</b></blockquote>
<br>

The 'event,hrline' record shows details for homerun events. The format of the 'event,hrline' record is defined within the game files via the 'legend,hrline' record, which is presented here for convenience.

<br><br>

legend,hrline,batteam,batter,pitcher,inning,runners,outs

<br>
<blockquote><b>event,sbline</b></blockquote>
<br>

The 'event,sbline' record shows details for stolen base events. The format of the 'event,sbline' record is defined within the game files via the 'legend,sbline' record, which is presented here for convenience.

<br><br>

legend,sbline,batteam,runner,pitcher,catcher,inning

<br>
<blockquote><b>event,csline</b></blockquote>
<br>

The 'event,csline' record shows details for caught stealing events. The format of the 'event,csline' record exactly parallels the 'event,sbline' record.

<br>
<blockquote><b>event,wpline</b></blockquote>
<br>

The 'event,wpline' record shows details for wild pitch events. The format of the 'event,wpline' record is defined within the game files via the 'legend,wpline' record, which is presented here for convenience.

<br><br>

legend,wpline,pitteam,pitcher,catcher,inning

<br>
<blockquote><b>event,pbline</b></blockquote>
<br>

The 'event,pbline' record shows details for passed ball events. The format of the 'event,pbline' record exactly parallels the 'event,wpline' record.

<br>
<blockquote><b>event,bkline</b></blockquote>
<br>

The 'event,bkline' record shows details for balk events. The format of the 'event,bkline' record exactly parallels the 'event,wpline' record.

<br>
<blockquote><b>event,eline</b></blockquote>
<br>

The 'event,eline' record shows details for error events. The format of the 'event,eline' record is defined within the game files via the 'legend,eline' record, which is presented here for convenience.

<br><br>

legend,eline,fldteam,fielder,position,inning

<br>
<blockquote><b>event,rline</b></blockquote>
<br>

The 'rline' records identify the offensive players credited with the run scored and RBI for all runs for which this information is known as well as the pitcher(s) responsible for the run. The format of the 'rline' record is the following.
<br><br>

event,rline,team,inning,run_b,rbi_b,run_p,rbi_p
<br><br>

where 'run_b' and 'rbi_b' are the id's of the players for the batting team who scored and drove in the run. If no RBI was credited on the play, 'rbi_b' will be blank; 'run_p' is the pitcher who was responsible for putting the run on base; 'rbi_p' was the pitcher on the mound when the run scored (whether or not an RBI was credited on the play). If the identity of any of these players is unknown, that will be indicated by a "?".

<br><br>

Following the 'rline' records, the game file may include partial play-by-play for the run-scoring event(s) and/or innings to the extent which these are known. These lines will take the same format as Retrosheet's event files.

<br><br>

<b>com,...</b>

<br><br>

In addition to the formal records identified above, Retrosheet game files may include general comments. These will be structured as follows.

<br><br>
com,"..."
<br><br>

As with other record types, comments can be placed anywhere within a game file. As a general rule, however, it is preferred to have comments appear at the end of the game file.

<br><br>

Eventually, Retrosheet intends to provide game files for all games for which Retrosheet has any data. The creation of these files will take some time, however.

<hr>

<!--#include virtual="retrofooter.html" -->

<hr>

<p></p></font></font>

</body></html>