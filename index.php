<html>
    <head>
        <title>Cei mai importanti oameni ai planetei</title>
        <script src='js/jquery.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <link rel='stylesheet' type='text/css' href='css/style.css' />
        <link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
        <link rel='stylesheet' type='text/css' href='css/atom.css' />
    </head>
    <body>
        <div class='menu'>
        <center><h2>Meniu</h2></center>
        <ul class='pri'>
            <li><a href='index.php'>HomePage</a></li>
        </ul>
        </div>
        <header>
            <div class='section-wapper'>
                <h1>
                    Triburile Farm-Maker<br/>
                    <h2 class='sub'>Make your own farm script easy</h2>
                </h1>
            </div>
        </header>
            <!----------------------------HEADER&MENU--------------------------->
        <section class='intro section-wrapper'>
            <div class='span-9' style=''>
    <form id='units_form' action='make.php' method='post'>
    <table>
        <tbody>
            <tr style='display:none'>
                <td>
                    <div id='unit_popup_template' style='display: none'>
                        <div class='inner-border main content-border' style='border: none; font-weight: normal'>
                            <table style='float: left;width:450px'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class='unit_desc'></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style='border: 1px solid #DED3B9;' class='vis' width='100%'>
                                                <tbody>
                                                    <tr>
                                                        <th width='180'>Costuri</th>
                                                        <th>Populatie</th>
                                                        <th>Rapiditate</th>
                                                        <th>Capacitate de transport</th>
                                                    </tr>
                                                    <tr class='center'>
                                                        <td>
                                                            <nobr><span class='icon header wood'> </span><span class='unit_wood'></span></nobr>
                                                            <nobr><span class='icon header stone'> </span><span class='unit_stone'></span></nobr>
                                                            <nobr><span class='icon header iron'> </span><span class='unit_iron'></span></nobr>
                                                        </td>
                                                        <td><span class='icon header population'> </span><span class='unit_pop'></span></td>
                                                        <td id='unit_speed'></td>
                                                        <td class='unit_carry'></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class='vis event_loot' style='display: none; width: 100%'>
                                                <tbody>
                                                    <tr>
                                                        <th colspan='2'>Atribute eveniment</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Capacitate de transport:</td>
                                                        <td><span class='unit_event_loot'></span> <span class='unit_event_res_name'></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class='vis has_levels_only' style='border: 1px solid #DED3B9;text-align:center' width='100%'>
                                                <tbody>
                                                    <tr>
                                                        <th colspan='3'>Rezultate de lupta</th>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'>Putere de atac</td>
                                                        <td width='20px'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/att.png?1bdd4' alt='Putere de atac' class=''></td>
                                                        <td><span class='unit_attack'></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'>Aparare în general</td>
                                                        <td><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def.png?12421' alt='Aparare în general' class=''></td>
                                                        <td><span class='unit_defense'></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'>Aparare - cavalerie</td>
                                                        <td><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def_cav.png?46b3d' alt='Aparare - cavalerie' class=''></td>
                                                        <td><span class='unit_defense_cavalry'></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align='left'>Aparare - arcasi</td>
                                                        <td><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def_archer.png?faccf' alt='Aparare - arcasi' class=''></td>
                                                        <td><span class='unit_defense_archer'></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <div class='show_if_has_abilities'>
                                                <table class='vis' style='width:100%;'>
                                                    <tbody>
                                                        <tr>
                                                            <th>Abilita?i speciale</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul class='unit_info_abilities' style='margin:5px;padding-left:20px;'></ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>

                                            <div class='show_if_has_reqs'>
                                                <table class='vis' width='100%'>
                                                    <tbody>
                                                        <tr>
                                                            <th id='reqs_count' colspan='1'>Conditii pentru cercetarea trupelor</th>
                                                        </tr>
                                                        <tr id='reqs'></tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>

                                            <table class='unit_tech vis unit_tech_levels' width='100%'>
                                                <tbody>
                                                    <tr style='text-align:center'>
                                                        <th>Tech-Level</th>
                                                        <th width='350'>Costuri cercetare</th>
                                                        <th width='30' style='text-align:center'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/att.png?1bdd4' alt='Putere de atac' class=''></th>
                                                        <th width='30' style='text-align:center'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def.png?12421' alt='Aparare în general' class=''></th>
                                                        <th width='30' style='text-align:center'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def_cav.png?46b3d' alt='Aparare - cavalerie' class=''></th>
                                                        <th width='30' style='text-align:center'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/def_archer.png?faccf' alt='Aparare - arcasi' class=''></th>
                                                    </tr>
                                                    <tr id='unit_tech_prototype' style='display: none;text-align:center'>
                                                        <td class='tech_level'></td>
                                                        <td>
                                                            <span class='grey tech_researched'>deja cercetat</span>
                                                            <span class='tech_res_list'>
									<span class='icon header wood'> </span><span class='tech_wood'></span> <span class='icon header stone'> </span><span class='tech_stone'></span> <span class='icon header iron'> </span><span class='tech_iron'></span>
                                                            </span>
                                                        </td>
                                                        <td class='tech_att'></td>
                                                        <td class='tech_def'></td>
                                                        <td class='tech_def_cav'></td>
                                                        <td class='tech_def_archer'></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class='vis unit_tech unit_tech_cost' width='100%'>
                                                <tbody>
                                                    <tr>
                                                        <th>Costuri cercetare</th>
                                                    </tr>
                                                    <tr>
                                                        <td><span class='icon header wood'> </span><span class='tech_cost_wood'></span> <span class='icon header stone'> </span><span class='tech_cost_stone'></span> <span class='icon header iron'> </span><span class='tech_cost_iron'></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <img style='margin-top: 60px; max-width: 200px; display: none' id='unit_image' src='graphic/map/empty.png' alt=''>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign='top'>
                    <table class='vis' width='100%'>
                        <tbody>
                            <tr>
                                <th>Infanterie</th>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'spear')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_spear.png?48b3b' title='Lancier' alt='' class='faded'></a>
                                    <input id='unit_input_spear' name='spear' type='text' style='width: 40px' tabindex='1' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_spear'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'sword')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_sword.png?b389d' title='Luptator cu spada' alt='' class=''></a>
                                    <input id='unit_input_sword' name='sword' type='text' style='width: 40px' tabindex='2' value='' class='unitsInput'> <a href='javascript:insertUnit($('#unit_input_sword'), 19)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'axe')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_axe.png?51d94' title='Luptator cu toporul' alt='' class='faded'></a>
                                    <input id='unit_input_axe' name='axe' type='text' style='width: 40px' tabindex='3' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_axe'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'archer')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_archer.png?db2c3' title='Arcas' alt='' class='faded'></a>
                                    <input id='unit_input_archer' name='archer' type='text' style='width: 40px' tabindex='4' value='' class='unitsInput' disabled> <a class='hidden' href='javascript:insertUnit($('#unit_input_archer'), 0)'>(0)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td valign='top'>
                    <table class='vis' width='100%'>
                        <tbody>
                            <tr>
                                <th>Cavaleria</th>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'spy')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_spy.png?eb866' title='Spion' alt='' class='faded'></a>
                                    <input id='unit_input_spy' name='spy' type='text' style='width: 40px' tabindex='5' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_spy'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'light')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_light.png?2d86d' title='Cavalerie usoara' alt='' class='faded'></a>
                                    <input id='unit_input_light' name='light' type='text' style='width: 40px' tabindex='6' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_light'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'marcher')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_marcher.png?ad3be' title='Arcas calaret' alt='' class='faded'></a>
                                    <input id='unit_input_marcher' name='marcher' type='text' style='width: 40px' tabindex='7' value='' class='unitsInput' disabled> <a class='hidden' href='javascript:insertUnit($('#unit_input_marcher'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'heavy')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_heavy.png?a83c9' title='Cavalerie grea' alt='' class='faded'></a>
                                    <input id='unit_input_heavy' name='heavy' type='text' style='width: 40px' tabindex='8' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_heavy'), 0)'>(0)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td valign='top'>
                    <table class='vis' width='100%'>
                        <tbody>
                            <tr>
                                <th>Arme de asediere</th>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'ram')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_ram.png?2003e' title='Berbec' alt='' class='faded'></a>
                                    <input id='unit_input_ram' name='ram' type='text' style='width: 40px' tabindex='9' value='' class='unitsInput'> <a class='hidden' href='javascript:insertUnit($('#unit_input_ram'), 0)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'catapult')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_catapult.png?5659c' title='Catapulta' alt='' class='faded'></a>
                                    <input id='unit_input_catapult' name='catapult' type='text' style='width: 40px' tabindex='10' value='' class='unitsInput' disabled> <a class='hidden' href='javascript:insertUnit($('#unit_input_catapult'), 0)'>(0)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td valign='top'>
                    <table class='vis' width='100%'>
                        <tbody>
                            <tr>
                                <th>Altele</th>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'knight')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_knight.png?58dd0' title='Paladin' alt='' class=''></a>
                                    <input id='unit_input_knight' name='knight' type='text' style='width: 40px' tabindex='11' value='' class='unitsInput' disabled> <a href='javascript:insertUnit($('#unit_input_knight'), 1)'>(0)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='nowrap'>
                                    <a href='#' class='unit_link' onclick='return UnitPopup.open(event, 'snob')'><img src='http://dsro.innogamescdn.com/8.33.3/25719/graphic/unit/unit_snob.png?0019c' title='Generatie de nobili' alt='' class='faded'></a>
                                    <input id='unit_input_snob' name='snob' type='text' style='width: 40px' tabindex='12' value='' class='unitsInput' disabled> <a class='hidden' href='javascript:insertUnit($('#unit_input_snob'), 0)'>(0)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>

            </tr>
        </tbody>
    </table>
    <div id='command_actions' class='target-select clearfix vis float_left'>
        <table class='vis' style='width: 100%'>
            <tbody>
                <tr>
                    <td><br/><br/>
                        Coordonate sate <input style='width: 400px;' name='coord' placeholder='exemplu : 500|500 501|502 326|453'><br/><br/>
                        Lumea <input style='width: 400px;' name='lume' placeholder='1-44'><br/><br/>
                        <input id='target_support' tabindex='16' class='support btn btn-support btn-target-action' name='make' type='submit' value='Make my script!'></td>
                </tr>
            </tbody>
        </table>
    </div>
</form>


<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
        </section>
        <!----------------------------FOOTER--------------------------->
        <footer>
                <h3>
                <center>&copy; Fmohican 2015<center>
                </h3>
        </footer>
    </body>
</html>