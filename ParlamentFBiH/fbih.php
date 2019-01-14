<?php
include('../DB/db.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Parlament BiH</title>
        <link rel="stylesheet" href="../Styles/mape.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <h1>Elections 2018</h1>
                 <ul>
                    <li><a href="../Predsjednistvo/predsjednistvo.php">Predsjedništvo BiH</a></li>
                    <li><a href="../DrzavniParlament/drzavni.php">Parlamentarna Skupština</a></li>
                    <li class = "active"><a href="../ParlamentFBiH/fbih.php">Parlament FBiH</a></li>
                    <li><a href="../PredsjednikRS/predsjednikRS.php">Predsjednik RS</a></li>
                    <li><a href="../SkupstinaRS/skupstinaRS.php">Narodna Skupština RS</a></li>
                    <li style="border-right: 2px solid #f7c800;"><a href="../Kantoni/kantoni.php">Skupštine Kantona u FBiH</a></li>
                </ul>
        </header>
        <div class = "left">
        <svg class="map" 
            xmlns:mapsvg="http://mapsvg.com" 
            xmlns:dc="http://purl.org/dc/elements/1.1/" 
            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" 
            xmlns:svg="http://www.w3.org/2000/svg" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 630 600"
            width="400px"
            height="380px" 
            mapsvg:geoviewbox="15.714400 45.275910 19.625600 42.560878">
               
               
               <path class="hover" 
                    d="M456.72,351.67L456.72,351.67L456.55,351.58L456.55,351.58L460.66,349.18L466.12,350.84L475.73,333.78L477.72,333.94L481.53,330.46L493.62,331.79L499.25,329.31L502.23,330.96L502.56,337.75L506.54,339.41L506.54,339.41L511.01,348.68L513.33,347.86L516.97,352.83L501.07,364.59L498.42,367.9L498.92,369.39L487.66,374.03L484.51,373.53L481.69,375.19L475.4,373.2L460.66,363.92L455.03,363.1L452.21,365.91L448.57,366.08l-10,-8
                      L437.67,358.62L432.2,356.14L432.2,356.14L430.88,352.33L427.89,351.67L419.78,361.77L418.12,365.41L418.78,368.4L418.78,368.4L415.14,370.38L415.14,370.38L411.99,366.57L413.15,362.43L406.53,360.61L405.7,364.59L400.4,370.38L396.42,363.92L394.44,362.93L392.28,365.91L389.96,362.6L393.11,357.63L390.13,354.15L387.64,354.15L383.34,348.68L383.5,346.7L379.53,345.21L377.38,348.35L372.07,346.53L369.26,348.52L367.27,347.53L366.77,344.38L363.79,343.05L368.93,341.07L367.11,337.09L364.46,337.26L358.7,325.39L358.7,325.39L362.47,323.26L362.47,323.26L369.42,323.26L376.71,315.31L379.2,316.63L379.86,314.81L384.5,312.99L385.33,308.68L387.48,306.86L384.5,305.21L385.66,303.71L384.79,300.18L384.79,300.18L386.65,300.65L386.65,300.65L388.14,299.32L395.26,302.14
                      L420.11,313.57L416.8,315.23L409.51,324.83L410.01,328.48L415.14,330.63L416.8,333.94L415.97,335.93L422.26,342.06L445.78,341.73L448.43,346.86L452.24,349.18L452.24,349.18L456.72,351.67z" 
                    id="407" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 7</title>
               </path>
               <path class=" hover" 
                    d="M483.87,242.59L484.38,245.99L478.41,250.46L478.75,252.45L469.64,254.77L466.65,259.41L460.36,262.22L455.22,267.19L455.22,267.19L452.91,266.2L452.91,266.2L448.93,263.05L448.27,267.52L442.64,265.37L441.97,261.39L435.02,255.6L430.71,257.58L430.21,260.07L424.91,262.39L426.9,265.53L426.07,269.01L423.92,269.18L420.44,264.54L420.11,266.86L414.97,269.68L415.64,278.79L409.84,279.12L410.83,281.77L407.85,286.4L398.58,284.58L396.09,286.24L394.27,284.58L391.62,287.9L396.26,298L395.26,302.14L388.14,299.32L386.65,300.65L386.65,300.65L384.66,300.15L384.66,300.15L377.21,297.17L377.71,293.03L372.07,291.87L371.74,290.38L374.39,288.39L367.6,285.74L366.11,274.81L358.16,268.35L355.34,268.18L356.01,266.69L353.19,266.53L358.99,263.55L356.84,260.73L355.34,259.41L350,210L419.81,204.83L429.92,204.33L442.17,216.26L441.51,231.16L446.64,233.81L450.12,239.28L455.26,241.6L463.21,241.27L465.69,244.91L470.99,245.41L470,243.59L475.96,240.77L479.61,242.26L482.85,235.5L482.85,235.5L485.04,236.96L485.04,236.96L483.05,239.45L483.71,242.59L483.71,242.59z" 
                    id="406" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 6</title>
               </path>
               <path class=" hover" 
                    d="M355.34,259.41L353.19,261.56L347.23,260.07L344.58,257.09L345.57,253.77L343.58,251.95L344.25,249.96L339.44,244.83L335.3,246.15L330.83,242.18L330.17,237.38L325.86,237.04L323.54,232.9L325.03,230.92L323.05,229.76L324.54,227.77L324.04,224.13L329.67,220.65L328.51,215.84L324.7,212.53L326.03,210.21L321.39,206.4L321.22,202.92L316.59,201.43L313.31,196.18L313.31,196.18L316.36,192.57L316.36,192.57L320.63,191.26L321.94,187.32L336.05,184.7L344.26,180.76L348.53,175.84L350.17,166.65L348.2,158.12L343.6,151.55L337.7,137.44L341.31,130.88L341.31,130.88L341.05,130.57L341.05,130.57L347.54,123.33L349.51,125.63L360.34,124.31L364.94,127.92L368.54,127.92L368.22,136.13L371.17,141.71L369.53,143.02L373.14,145.97L371.83,150.24L372.81,156.15L381.67,151.22L386.59,150.9L394.14,150.57L395.46,152.86L402.68,154.51L402.68,154.51L403.08,154.42L403.08,154.42L405.57,159.11L402.75,161.93L405.07,166.23L400.93,167.06L406.73,173.52L407.72,177L405.73,181.64L407.55,182.96L407.06,185.95L415.17,190.25L417.33,188.76L426.93,197.87L426.11,200.19L420.47,199.69L419.81,204.83l-5,2l-6,3l-3,2l-3,0l-2,-4l-8,0l-6,-1l-4,4l-3,5l-3,6l-5,-2l-5,-5l-2,0l2,6l-4,30l-2,3z" 
                    id="405" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer; stroke-width:0.3;" 
                    stroke="white">
                    <title>Izborna jedinica 5</title>
               </path>
               <path class=" hover" 
                    d="M390.1,394.51L384.96,390.59L382.64,393.9L361.61,391.75L354.98,397.88L356.64,404.5L351.5,412.46L352.83,418.42L360.61,422.72L359.62,436.47L355.64,445.58L352.17,449.23L346.86,451.55L342.89,457.51L344.55,462.15L349.18,465.96L349.02,472.08L354.98,471.75L359.45,480.2L349.18,489.81L349.51,494.12L346.7,500.91L349.85,505.54L351.83,513.33L354.98,516.14L354.15,521.11L356.97,524.1L356.47,526.75L360.78,527.41L366.08,534.78L368.73,535.77L376.51,544.22L378.5,547.53L377.67,549.52L386.62,552.5L387.28,555.98L393.24,562.61L394.07,565.75L397.55,566.91L401.69,571.72L401.53,573.7L405.16,576.18L405.16,576.18L404.41,577.81L397.38,580.04L386.36,566.88L382.12,567.41L380.26,562.47L373.8,560.68L373.97,555.53L363.91,547.99L358.7,546.85L356.76,542.17L353.34,541.43L349.68,537.73L340.54,535.27L341.37,530.25L337.73,529.08L334.75,523.06L334.43,516.57L328.92,511.97L324.47,518.04L315.32,511.59L309.97,510.68L303.44,518.72L300.52,515.55L288.34,509.36L299.12,513.08L292.02,507.59L297.5,507.23L298.37,505.33L300.44,505.84L312.99,500.41L305.52,486.57L303.54,478.78L299.34,474.24L299.34,474.24L300.29,473L298.46,470.84L300.29,467.53L303.93,465.71L300.78,463.39L300.78,457.59L304.59,457.43L304.59,456.27L300.12,452.95L297.8,448.48L294.32,448.48L289.52,445L289.52,441.86L291.84,442.52L292,441.03L290.02,435.73L293,432.58L294.99,433.24L297.97,431.26L306.42,435.56L308.9,433.74L311.22,435.23L315.69,429.76L308.57,423.8L310.39,418.67L305.92,414.69L312.88,411.05L311.05,408.4L301.78,403.26L297.64,403.92L297.97,399.62L295.65,395.64L291.18,392.5L290.18,388.35L284.72,386.2L285.88,385.04L278.09,380.4L277.43,378.09L283.39,377.26L284.05,374.44L289.69,376.1L293.5,371.79L287.53,368.31L291.67,360.53L284.24,354.92L284.24,354.92L284.73,353.71L284.73,353.71L277.84,353.06L275.54,344.52L273.24,340.91L269.3,338.94L268.32,334.02L256.18,331.4L260.11,329.1L259.79,324.83L257.49,322.21L258.8,318.27L257.82,314.66L267.33,308.1L267.33,308.1L269.53,307.16L269.53,307.16L275.61,308.19L278.59,312L285.21,309.18L286.04,311.17L297.97,310.01L307.31,317.96L308.3,314.81L314.6,314.15L316.09,311L317.25,313.16L322.38,309.68L324.7,311.17L327.52,310.17L325.86,307.03L330.83,304.21L330.67,306.7L333.15,307.52L335.47,305.7L338.12,307.36L338.28,310.67L342.26,312.82L342.43,316.63L346.57,324.25L351.37,325.41L353.36,321.44L356.84,322.1L358.66,325.41L358.66,325.41L358.7,325.39L358.7,325.39L364.46,337.26L367.11,337.09L368.93,341.07L363.79,343.05L366.77,344.38L367.27,347.53L369.26,348.52L372.07,346.53L377.38,348.35L379.53,345.21L383.5,346.7L383.34,348.68L387.64,354.15L390.13,354.15L393.11,357.63L389.96,362.6L392.28,365.91L394.44,362.93L396.42,363.92L400.4,370.38L405.7,364.59L406.53,360.61L413.15,362.43L411.99,366.57L415.14,370.38L415.14,370.38L418.71,368.71L418.71,368.71L414.61,376.59L411.63,378.42L413.95,381.23L411.96,393.49L408.98,392L403.35,395.15L396.39,392.33L390.1,394.48L390.1,394.48z" 
                    id="409" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 9</title>
               </path>
               <path class=" hover" 
                    d="M299.34,474.24L269.19,456.03L269.69,451.2L266.67,445.4L262.1,441.72L253.99,440.2L252.72,433.43L240.67,410.81L245.32,398.04L244.59,394.04L241.21,389.4L236.2,386L223.05,386.28L212.01,375.4L212.01,375.4L212.53,373.4L218.11,375.04L219.75,373.73L224.01,376.03L229.26,373.73L234.52,375.37L237.47,373.08L239.77,374.39L239.44,377.34L242.39,378L243.38,376.03L248.3,377.67L264.71,365.53L266.68,369.47L271.27,371.11L275.54,364.87L277.51,364.54L279.48,359.29L284.07,355.35L284.07,355.35L284.24,354.92L284.24,354.92L291.67,360.53L287.53,368.31L293.5,371.79L289.69,376.1L284.05,374.44L283.39,377.26L277.43,378.09L278.09,380.4L285.88,385.04L284.72,386.2L290.18,388.35L291.18,392.5L295.65,395.64L297.97,399.62L297.64,403.92L301.78,403.26L311.05,408.4L312.88,411.05L305.92,414.69L310.39,418.67L308.57,423.8L315.69,429.76L311.22,435.23L308.9,433.74L306.42,435.56L297.97,431.26L294.99,433.24L293,432.58L290.02,435.73L292,441.03L291.84,442.52L289.52,441.86L289.52,445L294.32,448.48L297.8,448.48L300.12,452.95L304.59,456.27L304.59,457.43L300.78,457.59L300.78,463.39L303.93,465.71L300.29,467.53L298.46,470.84L300.29,473z" 
                    id="410" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 10</title>
               </path>
               <path class=" hover" 
                    d="M212.01,375.4L209.03,374.15L207.09,375.59L194.75,359.29L188.97,354.08L185.58,347.61L173.25,336.76L168.94,329.23L161.15,327.07L155.61,318.83L154.89,310.34L141.35,300.23L136.14,292.87L128.83,288.33L127.96,282.73L122.45,273.19L112.39,271.68L110.79,261L101.76,261.19L100.06,257.24L95.89,253.59L94.8,248.84L86.33,241.71L80.72,233.05L79.1,225.18L79.1,225.18L82.83,223.42L82.17,215.22L89.06,210.95L89.39,200.45L86.11,192.25L88.08,191.92L88.41,188.96L84.8,178.46L88.74,171.9L93.66,176.82L104.82,177.15L109.41,178.79L109.41,178.79L113.02,181.42L113.02,181.42L126.48,191.59L132.71,201.11L141.9,207.34L152.08,209.97L164.22,222.11L167.5,222.44L173.08,227.36L177.67,227.03L180.3,229.66L178.33,231.96L182.6,235.24L184.57,240.16L201.63,253.29L206.88,262.81L210.16,262.81L217.06,267.73L236.09,265.1L236.09,265.1L238.72,262.81L238.72,262.81L240.42,267.73L242.39,268.06L242.72,272.32L244.69,272.65L247.64,277.9L250.27,287.42L252.89,290.04L251.58,292.01L255.85,294.64L260.11,290.04L261.43,293.33L266.02,296.61L265.69,302.52L268.97,302.19L267.66,304.48L269.63,307.11L269.63,307.11L267.33,308.1L267.33,308.1L257.82,314.66L258.8,318.27L257.49,322.21L259.79,324.83L260.11,329.1L256.18,331.4L268.32,334.02L269.3,338.94L273.24,340.91L275.54,344.52L277.84,353.06L284.73,353.71L284.73,353.71L284.07,355.35L284.07,355.35L279.48,359.29L277.51,364.54L275.54,364.87L271.27,371.11L266.68,369.47L264.71,365.53L248.3,377.67L243.38,376.03L242.39,378L239.44,377.34L239.77,374.39L237.47,373.08L234.52,375.37L229.26,373.73L224.01,376.03L219.75,373.73L218.11,375.04L212.53,373.4z" 
                    id="412" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 12</title>
               </path>
               <path class=" hover" 
                    d="M86.11,58.63L87.16,62.12L71.08,65.73L81.91,91.33L87.49,90.02L93.4,99.53L97.66,100.52L105.54,89.03L118.99,94.28L128.18,92.31L132.12,94.61L136.06,92.64L140.65,100.85L152.8,99.86L158.38,103.14L161.66,107.08L165.92,120.87L163.96,129.07L172.49,133.01L172.49,142.2L174.46,146.46L177.74,148.76L175.44,155.65L178.72,159.26L177.41,163.2L175.11,165.83L170.19,167.47L163.3,168.13L121.62,163.53L109.48,166.81L109.15,173.05L112.6,181.11L112.6,181.11L109.41,178.79L109.41,178.79L104.82,177.15L93.66,176.82L88.74,171.9L84.8,178.46L88.41,188.96L88.08,191.92L86.11,192.25L89.39,200.45L89.06,210.95L82.17,215.22L82.83,223.42L79.1,225.18L79.1,225.18L76.91,207L78.12,203.77L76.79,201.03L69.43,197.47L63.96,196.84L62.7,193.02L66.52,193.41L70.32,191.47L67.1,187.41L66.99,181.64L65.41,180.55L67.35,174.43L64.74,167.13L49.53,158.92L46.15,152L46.93,150.71L50.97,150.82L50.56,146.79L53.5,146.44L49.78,137.3L40.95,132.9L37.93,124.34L32.53,122.06L28.67,116.64L22.69,118.94L21.39,121.36L16.04,122.17L14.4,118.79L9.76,116.42L0.08,101.25L1.1,98.75L6.48,98.59L10.95,94.61L5.68,89.57L3.8,76.69L6.01,67.99L11.27,67.02L10.99,59.96L4.93,47.01L10.63,35.92L7.46,23.89L14.79,14.58L17.6,15.08L19.98,11.01L28,12.67L27.78,10.32L32.46,9.77L32.67,13.62L34.66,15.81L40.97,11.63L47.71,15.37L48.42,18.74L46.32,22.23L51.17,22.61L52.17,27.14L54.32,27.39L56.8,33.07L57.65,38.97L67.96,43.85L79.2,54.67L80.46,58.91z" 
                    id="401" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 1</title>
               </path>
               <path class=" hover" 
                    d="M438.78,90.84L440.09,97.73L447.41,98.23L447.41,98.23L446.98,98.39L446.98,98.39L442.39,101.67L437.46,101.34L437.14,104.62L441.4,106.92L442.06,108.23L439.43,109.54L443.04,111.84L444.03,113.48L442.71,115.12L447.64,121.03L456.83,120.05L459.45,123L465.03,122.67L470.61,116.76L479.47,115.12L480.46,118.73L482.1,115.78L484.07,115.78L484.07,115.78L484.37,115.41L484.37,115.41L487.02,120.37L486.36,124.64L477.17,128.58L474.55,131.53L472.25,138.75L474.88,146.3L477.83,149.58L482.75,151.22L483.08,157.13L487,154L496.06,163L490,200L407.06,185.95L407.55,182.96L405.73,181.64L407.72,177L406.73,173.52L400.93,167.06L405.07,166.23L402.75,161.93L405.57,159.11L403.08,154.42L403.08,154.42z" 
                    id="403" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 3</title>
               </path>
               <path class=" hover" 
                    d="M456.33,42.79l-3.6,2.45l0.05,1.57l7.86,1.52l-0.25,-5.85l3.19,-2.19l1.8,3.47l-2.91,3.2l10.58,9.95l-1.27,4.85l4.58,-1.04l5.71,1.26l-1.31,6.12l-3.25,0.41l0,0l-0.33,1.31l0,0l-6.56,2.3l0,0l-1.97,-0.33l0,0l-4.27,-1.64l0,0l-21.66,-12.8l0,0l-8.69,-10.31l5.59,0.46l1.38,3.55l0.55,-4.02l2.14,-2.36l-3.11,-2.74l0.61,-1.48l4.77,2.39l1.41,3.4l1.33,-2.41l-1.64,-3.73l5.93,2.92l3.16,-3.18L456.33,42.79zM402.09,35.61l3.44,-0.38l2.85,3.12l14.8,-1.77l7.79,9.64l0,0l-4.67,0.97l-1.97,3.28h-1.64l0.33,4.27l-5.25,-2.3l-1.31,3.28l-4.92,-1.31l0,0l-2.95,5.25l-4.59,0.98l1.31,-5.58l-12.14,-7.22l0,0l-4.3,-4.48l0,0l3.45,-3.98l-1.88,-3.93l2.41,-3.6l6.2,-1.66L402.09,35.61z M408.58,153.19L419.41,151.88L424.01,146.63L418.43,141.71L413.18,142.03L408.25,137.44L409.24,135.8L406.94,132.52L402.02,131.53L395.13,127.27L389.55,127.59L384.63,123.33L382,124.97L380.03,122.34L381.67,119.06L380.36,115.12L382.99,112.83L395.13,109.54L398.41,110.86L405.63,110.2L412.85,101.34L411.21,98.39L412.85,91.82L421.05,80.99L419.74,78.37L426.63,79.02L427.62,77.71L431.56,79.68L432.54,83.95L438.78,90.84l6,2l3,8l-2,2l-6,10l3,0l-1,7l-10,1-2,2l-4,2l1,8l1,10z" 
                    id="402" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 2</title>
               </path>
               <path class=" nemoze" 
                    style="opacity: 1; fill: #c4c4c4; fill-opacity: 1; fill-rule: nonzero; stroke: #808080; stroke: white; stroke-width: 1; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-dasharray: none; stroke-dashoffset: 0; stroke-opacity: 1; " 
                    d="M512.44,93.3L512.62,96.75L516.23,98.39L513.27,102.32L510.32,98.39L506.05,100.35L502.77,109.87L499.16,112.17L495.22,110.86L495.22,112.5L493.58,110.53L488.66,109.87L485.71,110.53L485.71,113.81L485.71,113.81L484.07,115.78L484.07,115.78L482.1,115.78L480.46,118.73L479.47,115.12L470.61,116.76L465.03,122.67L459.45,123L456.83,120.05L447.64,121.03L442.71,115.12L444.03,113.48L443.04,111.84L439.43,109.54L442.06,108.23L441.4,106.92L437.14,104.62L437.46,101.34L442.39,101.67L446.98,98.39L446.98,98.39L450.59,97.07L450.59,97.07L456.17,87.23L455.84,84.6L458.14,83.62L459.12,80.34L465.69,77.38L468.12,71.6L468.12,71.6L468.64,71.8L468.64,71.8L470.61,72.13L470.61,72.13L477.17,69.83L477.17,69.83L477.5,68.52L477.5,68.52L480.75,68.11L483.88,73.21L481.66,74.98L475.51,73.54L478.67,78.1L477.38,81.39L486.62,87.95L489.82,92.15z" 
                    id="brcko" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc">
                    <title>Brcko</title>
               </path>
               <path class=" hover" 
                    d="M384.79,300.18L385.66,303.71L384.5,305.21L387.48,306.86L385.33,308.68L384.5,312.99L379.86,314.81L379.2,316.63L376.71,315.31L369.42,323.26L362.47,323.26L362.47,323.26L358.66,325.41L358.66,325.41L356.84,322.1L353.36,321.44L351.37,325.41L346.57,324.25L342.43,316.63L342.26,312.82L338.28,310.67L338.12,307.36L335.47,305.7L333.15,307.52L330.67,306.7L330.83,304.21L325.86,307.03L327.52,310.17L324.7,311.17L322.38,309.68L317.25,313.16L316.09,311L314.6,314.15L308.3,314.81L307.31,317.96L297.97,310.01L286.04,311.17L285.21,309.18L278.59,312L275.61,308.19L269.53,307.16L269.53,307.16L269.63,307.11L269.63,307.11L267.66,304.48L268.97,302.19L265.69,302.52L266.02,296.61L261.43,293.33L260.11,290.04L255.85,294.64L251.58,292.01L252.89,290.04L250.27,287.42L247.64,277.9L244.69,272.65L242.72,272.32L242.39,268.06L240.42,267.73L238.72,262.81L238.72,262.81L238.55,262.95L238.55,262.95L242.52,256.57L241.87,235.89L236.62,230.64L231.36,211.28L226.11,206.36L226.11,201.44L232.68,196.18L231.04,184.04L233.01,181.74L236.94,182.07L242.52,185.35L248.76,183.39L250.07,180.1L257.29,183.39L267.14,191.59L267.79,196.84L276.98,199.47L278.95,203.73L287.16,202.75L298.64,204.72L305.86,198.48L309.47,198.81L312.75,196.84L312.75,196.84L313.31,196.18L313.31,196.18L316.59,201.43L321.22,202.92L321.39,206.4L326.03,210.21L324.7,212.53L328.51,215.84L329.67,220.65L324.04,224.13L324.54,227.77L323.05,229.76L325.03,230.92L323.54,232.9L325.86,237.04L330.17,237.38L330.83,242.18L335.3,246.15L339.44,244.83L344.25,249.96L343.58,251.95L345.57,253.77L344.58,257.09L347.23,260.07L353.19,261.56L355.34,259.41L356.84,260.73L358.99,263.55L353.19,266.53L356.01,266.69L355.34,268.18L358.16,268.35L366.11,274.81L367.6,285.74L374.39,288.39L371.74,290.38L372.07,291.87L377.71,293.03L377.21,297.17L384.66,300.15L384.66,300.15z" 
                    id="408" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 8</title>
               </path>
               <path class=" hover" 
                    d="M495.22,162.71L500.15,162.38L502.77,160.08L505.4,149.91L512.29,143.02L514.26,144.99L516.23,143.02L520.82,145.97L518.52,151.22L518.52,151.22L519.44,153.66L519.44,153.66L519.66,157.29L515.68,163.58L517.84,165.41L516.18,171.37L513.2,170.71L513.2,176.5L508.89,177.33L503.59,189.92L498.62,188.26L494.65,189.92L493.49,195.22L490.51,198.37L485.7,200.02L485.54,202.84L478.08,206.32L475.76,209.96L478.08,218.91L477.75,225.53L482.55,235.31L482.55,235.31L482.85,235.5L482.85,235.5L479.61,242.26L475.96,240.77L470,243.59L470.99,245.41L465.69,244.91L463.21,241.27L455.26,241.6L450.12,239.28L446.64,233.81L441.51,231.16L442.17,216.26L429.92,204.33L419.81,204.83L420.47,199.69L426.11,200.19L426.93,197.87L417.33,188.76L415.17,190.25L407.06,185.95l4,-4l15,5l5,-2l12,0l7,-4l5,3l6,-5l8,-2l5,-3l5,-1l7,-3l4,1l3,-3l3,-6" 
                    id="404" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 4</title>
               </path>
               <path class="nemoze" 
                    style="cursor: not-allowed; opacity: 1; fill: #c4c4c4; fill-opacity: 1; fill-rule: nonzero; stroke: #808080; stroke: white; stroke-width: 1; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-dasharray: none; stroke-dashoffset: 0; stroke-opacity: 1; " 
                    d="M547.68,83.54l6.46,-3.59l3.97,2.07l3.9,-1.08l6.62,4.25l2.85,-0.07l1.27,4.64l2.05,0.9L572.19,94l-2.74,-0.7l1.61,3.1l-2.75,3.67l-3.96,-0.11l-0.3,5.74l-3.25,1.98l4.24,0.31l0.92,2.02l-4.26,1.8l3.87,5.89l-1.27,2.04l-2.75,-0.92l1.64,8.27l-5.4,2.68l-4.43,10.06l0.53,1.84l-4.9,4.56l0.42,3.53l-5.02,2.45l-1.66,3.68l2.32,3.28l-3.71,5.89l-6.93,0.46l-1.56,4.57l2.02,1.77l2.44,8.44l0.03,8.13l-5.98,4.89l-0.99,5.35l2.19,1.2l-1.27,2.42l0.92,2.62l3.07,1.11l-0.55,4.71l5.04,6.52l2.74,1.05l4.63,-1.9l1.72,4.6l2.68,1.72l6.59,-3.14l6.96,1.11l0.63,4.12l3.19,4.16l-0.75,2.85l2.46,2.92l0.14,5.11l7.45,3.02l1.74,5.39l3.99,2.41l4.85,-3.54l0.92,1.83l-1.71,4.54l3.33,0.87l2.64,6.86l6.96,2.8l2.99,4.99l1.44,-0.41l0.97,-4.51l2.07,0.46l0.55,3.8l2.99,0.24l-1.41,3.38l0.95,4.1l-8.81,3.66l0.31,3.1l-3.18,1.5l-3.57,4.81l-14.85,-0.46l-3.97,-1.86l-2.33,1.41l-5.67,-4.75l-2.24,0.19l-4.54,-3.21l-6.34,-0.59l-3.52,-3.86l-1.96,0.52l0.55,6.09l3.15,5.76l5.88,4.72l0.55,3.36l4.1,1.82l0.61,5.28l4.18,2.42l5.46,7.89l1.8,10.87l8.28,4.34l1.3,4.51l6.92,5.85l3.04,18.52l-2.13,2.05l-1.94,-2.31l-1.77,1.49l1.83,3.47l-1.28,4.01l2.39,2l-1.74,1.77l-6.74,-0.65l-5.95,3.27l-6.68,-8.29l-5.79,2.69l-9.51,-2l-3.18,1.85l-1.06,13.56l-4.99,-2.19l-7.4,-0.45l-6.29,4.71l-11.61,-8.84l-4.76,-0.34l-1.56,1.68l-1.52,-1.85l-3.9,5.98l-5.52,1.87l0.5,4.8l2.61,-3.29l1.5,0.82l0.83,12.44l3.38,3.54l2.04,-0.86l4.19,14.79l8.36,12.57l-0.27,7.84l-7.07,1.46l-5.43,6.77l-4.21,-4.05l-0.08,-3.64l-4.58,-2.18l0.61,-8.46l-2.24,-0.26l-5.46,-6.3l-10.84,2.55l2.44,6.11l-9.76,2.76l-15.65,10.75l-0.27,2.48l4.18,4.41l-9.51,13.22l-1.66,7.91l8.18,22.78l-7.73,2.45l-15.41,-2.47l-2.91,3.18l-5.21,12.89l-2.22,1.68l1.17,6.2l2.88,4l-4.66,9.02l1.61,9.59l-3.82,1.87l1.75,4.02l-0.67,3.25l3.16,1.27l3.51,6.11l6.48,-0.55l2.03,2.61l-1.67,4.14l1.57,9.71l-10.22,2.08l-1.33,2.03l6.9,7.84l-6.09,0.87l-3.44,4.79l-6.53,0.89l-9.26,-8.41l-2.57,-4.39l-9.48,1.15l0,0l-3.64,-2.48l0.17,-1.99l-4.14,-4.8l-3.48,-1.16l-0.83,-3.15l-5.96,-6.63l-0.66,-3.48l-8.94,-2.98l0.83,-1.99l-1.99,-3.31l-7.79,-8.45l-2.65,-0.99l-5.3,-7.37l-4.31,-0.66l0.5,-2.65l-2.82,-2.98l0.83,-4.97l-3.15,-2.82l-1.99,-7.79l-3.15,-4.64l2.82,-6.79l-0.33,-4.31l10.27,-9.61l-4.47,-8.45l-5.96,0.33l0.17,-6.13l-4.64,-3.81l-1.66,-4.64l3.98,-5.96l5.3,-2.32l3.48,-3.64l3.97,-9.11l0.99,-13.75l-7.79,-4.31l-1.33,-5.96l5.13,-7.95l-1.66,-6.63l6.63,-6.13l21.04,2.15l2.32,-3.31l5.14,3.92l6.29,-2.18l6.96,2.82l5.63,-3.15l2.98,1.49l1.99,-12.26l-2.32,-2.82l6.96,-7.95l-0.46,-5.05l1.66,-3.64l8.12,-10.1l2.98,0.66l1.33,3.81l5.47,2.48l2.51,-1.4l8.38,8.85l3.64,-0.17l2.82,-2.82l5.63,0.83l11.43,7.79l9.61,3.48l17.23,-5.8l-0.5,-1.49l2.65,-3.31l15.9,-11.76l-3.64,-4.97l-2.32,0.83l-4.47,-9.28l-3.97,-1.66l-0.33,-6.79l-2.98,-1.66l-5.63,2.48l-12.09,-1.32l-3.81,3.48l-1.99,-0.17l-9.61,17.06l-5.47,-1.66l-4.11,2.39l-8.12,-4.71l-2.65,-5.13l-23.52,0.33l-6.29,-6.13l0.83,-1.99l-1.66,-3.31l-5.13,-2.15l-0.5,-3.64l7.29,-9.61l3.31,-1.66l8.61,4.14l2.65,-6.29l2.82,-2.15l-1.16,-4.97l8.45,-18.55l2.65,-1.66l3.48,-7.62l3.81,-2.82l1.16,-5.13l7.79,-6.29l6.29,-2.82l2.98,-4.64l9.11,-2.32l-0.33,-1.99l5.96,-4.47l-1.33,-6.54l1.99,-2.48l-4.31,-3.64l-2.98,-7.78l0.33,-6.63l-2.32,-8.94l2.32,-3.64l7.45,-3.48l0.17,-2.82l4.8,-1.66l2.98,-3.15l1.16,-5.3l3.98,-1.66l4.97,1.66l5.3,-12.59l4.31,-0.83v-5.8l2.98,0.66l1.66,-5.96l-2.15,-1.82l3.98,-6.29l-1.13,-6.07l2.3,-5.25l-2.3,-1.64l-2.3,-1.31l-1.97,1.97l-1.97,-1.97l-1.97,0.66l-4.92,6.24l-2.63,10.17l-2.63,2.3l-4.92,0.33l-5.25,-4.27l-6.89,-1.31l-0.33,-5.91l-4.92,-1.64l-2.95,-3.28l-2.63,-7.55l2.3,-7.22l2.63,-2.95l9.19,-3.94l0.66,-4.27l-2.65,-4.96l0,0l1.33,-1.6l0,0v-3.28l2.95,-0.66l4.92,0.66l1.64,1.97v-1.64l3.94,1.31l3.61,-2.3l3.28,-9.52l4.27,-1.97l2.95,3.94l2.95,-3.94l-3.61,-1.64l-0.18,-3.44l0,0l12.21,-2.08l3.25,-3.9l4.71,-1.63l9.4,-7.64l3.3,0.55L547.68,83.54zM191.55,9.75l0.77,1.22l2.75,-1.2l2.36,1.02l0.02,-2.28l-1.91,-1.33l1.14,-1.57l2.07,1.55l1.47,4.89l1.72,-1.04l0.17,-2.68l2.41,0.51l-1.67,4.63l4.04,-2.26l2.3,5.29l20.09,12.1l10.63,0.07l4.18,-9.36l1.91,2.77l3.68,-0.49l0.19,2.72l2.71,-0.15l0.09,3.14l5.29,3.16l8.47,0.73l4.96,-5.62l1.28,3.12l-0.84,4.16l6.51,-1.97l-1.28,6.01l2.97,-1.35l4.26,1.39l2.86,-4.62l0.88,4.64l3.38,-1.46l3.41,1.92l11.22,-6.19l13.52,10.63l4.58,0.91l9.91,8.35l7.43,-3l6.48,-5.17l-0.59,-5.92l5.13,-1.7l2.82,-6.12l3.19,-1.77l2.36,0.51l2.47,5.33l1.96,-3.67l3.4,0.04l2.52,4.71l-2.3,2.81l6.43,5.55l13.53,0.67l0,0l4.3,4.48l0,0l12.14,7.22l-1.31,5.58l4.59,-0.98l2.95,-5.25l0,0l4.92,1.31l1.31,-3.28l5.25,2.3l-0.33,-4.27h1.64l1.97,-3.28l4.67,-0.97l0,0l3.05,0.83l8.69,10.31l0,0l21.66,12.8l0,0l3.74,1.44l0,0l-2.43,5.78l-6.56,2.95l-0.99,3.28l-2.3,0.98l0.33,2.63l-5.58,9.85l0,0l-3.18,1.16l0,0l-7.32,-0.5l-1.31,-6.89l-6.24,-6.89l-0.98,-4.27l-3.94,-1.97l-0.98,1.31l-6.89,-0.66l1.31,2.63l-8.21,10.83l-1.64,6.56l1.64,2.95l-7.22,8.86l-7.22,0.66l-3.28,-1.31l-12.14,3.28l-2.63,2.3l1.31,3.94l-1.64,3.28l1.97,2.63l2.63,-1.64l4.92,4.27l5.58,-0.33l6.89,4.27l4.92,0.98l2.3,3.28l-0.99,1.64l4.92,4.59l5.25,-0.33l5.58,4.92l-4.59,5.25l-16.74,2.63l-7.22,-1.64l-1.31,-2.3l-12.47,0.66l-8.86,4.92l-0.98,-5.91l1.31,-4.27l-3.61,-2.95l1.64,-1.31l-2.95,-5.58l0.33,-8.2h-3.61l-4.59,-3.61l-10.83,1.31l-1.97,-2.3l-6.5,7.24l-3.35,6.87l5.91,14.11l4.59,6.56l1.97,8.53l-1.64,9.19l-4.27,4.92l-8.21,3.94l-14.11,2.63l-1.31,3.94l-4.27,1.31l-6.89,6.24l-3.61,-0.33l-7.22,6.24l-11.49,-1.97l-8.2,0.98l-1.97,-4.27l-9.19,-2.63l-0.66,-5.25l-4.59,-4.92l-12.47,-6.56l-1.31,3.28l-6.24,1.97l-5.58,-3.28l-3.94,-0.33l-1.97,2.3l1.64,12.14l-6.56,5.25v4.92l5.25,4.92l5.25,19.36l5.25,5.25l0.66,20.68l-3.97,6.38l-5.09,3.47l-16.41,1.31l-6.89,-4.92h-3.28l-5.25,-9.52l-17.07,-13.13l-1.97,-4.92l-4.27,-3.28l1.97,-2.3l-2.63,-2.63l-4.59,0.33l-5.58,-4.92l-3.28,-0.33l-12.14,-12.14l-10.17,-2.63l-9.19,-6.24l-6.24,-9.52l-13.88,-10.48l-3.45,-8.06l0.33,-6.24l12.14,-3.28l41.68,4.59l6.89,-0.66l4.92,-1.64l2.3,-2.63l1.31,-3.94l-3.28,-3.61l2.3,-6.89l-3.28,-2.3l-1.97,-4.27v-9.19l-8.53,-3.94l1.97,-8.2l-4.27,-13.78l-3.28,-3.94l-5.58,-3.28l-12.14,0.98l-4.59,-8.21l-3.94,1.97l-3.94,-2.3l-9.19,1.97l-13.46,-5.25l-7.88,11.49l-4.27,-0.98l-5.91,-9.52l-5.58,1.31l-10.83,-25.6l16.08,-3.61l-1.05,-3.49l0,0l2.19,2.33l12.11,-0.44l0.42,-6.29l4.04,-4.44l0.81,-5.74l2.39,-2.94l-1.25,-4.82l10.59,-6.7l1.69,-8.74l2.77,-5.98l3.18,-2.79l10.77,-0.35l2.93,-1.53l7.12,4.8l7.76,2.7l5.71,-2.35l13.05,5l4.49,-2.12l-1.3,-4.8l1.97,-1.35l-0.97,-2.06l5.87,-0.22L190.76,0l3.44,4.25l-2.58,2.59L191.55,9.75z" 
                    id="rs_notAllowed" 
                    sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc">
               </path>
               <path class=" hover" 
                    d="M455.05,267.12L452.57,268.52L451.42,273.65L447.61,276.47L444.13,284.09L441.48,285.74l0,2l-3,5l-5,13l-1,3l-2,2l-2,4l0,4L420.11,313.57L395.26,302.14L396.26,298L391.62,287.9L394.27,284.58L396.09,286.24L398.58,284.58L407.85,286.4L410.83,281.77L409.84,279.12L415.64,278.79L414.97,269.68L420.11,266.86L420.44,264.54L423.92,269.18L426.07,269.01L426.9,265.53L424.91,262.39L430.21,260.07L430.71,257.58L435.02,255.6L441.97,261.39L442.64,265.37L448.27,267.52L448.93,263.05L452.91,266.2L452.91,266.2z" 
                    id="411" sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc" 
                    style="cursor: pointer;">
                    <title>Izborna jedinica 11</title>
               </path>
               <path style="opacity: 1; fill:none; stroke: white; stroke-width: 3; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-dasharray: none; stroke-dashoffset: 0; stroke-opacity: 1" 
                    d="M480.76,68.1l-3.25,0.41l0,0l-0.33,1.31l0,0l-6.56,2.3l0,0l-1.97,-0.33l0,0l-4.27,-1.64l0,0l-21.66,-12.8l0,0l-8.69,-10.31
                  M430.97,46.22l0,0l-4.67,0.97l-1.97,3.28h-1.64l0.33,4.27l-5.25,-2.3l-1.31,3.28l-4.92,-1.31l0,0l-2.95,5.25l-4.59,0.98l1.31,-5.58l-12.14,-7.22l0,0l-4.3,-4.48l0,0
                  M87.3,61.96l-16.08,3.61l10.83,25.6l5.58,-1.31l5.91,9.52l4.27,0.98l7.88,-11.49l13.46,5.25l9.19,-1.97l3.94,2.3l3.94,-1.97l4.59,8.21l12.14,-0.98l5.58,3.28l3.28,3.94l4.27,13.78l-1.97,8.2l8.53,3.94v9.19l1.97,4.27l3.28,2.3l-2.3,6.89l3.28,3.61l-1.31,3.94l-2.3,2.63l-4.92,1.64l-6.89,0.66l-41.68,-4.59l-12.14,3.28l-0.33,6.24l3.45,8.06l13.88,10.48l6.24,9.52l9.19,6.24l10.17,2.63l12.14,12.14l3.28,0.33l5.58,4.92l4.59,-0.33l2.63,2.63l-1.97,2.3l4.27,3.28l1.97,4.92l17.07,13.13l5.25,9.52h3.28l6.89,4.92l16.41,-1.31l5.09,-3.47l3.97,-6.38l-0.66,-20.68l-5.25,-5.25l-5.25,-19.36l-5.25,-4.92v-4.92l6.56,-5.25l-1.64,-12.14l1.97,-2.3l3.94,0.33l5.58,3.28l6.24,-1.97l1.31,-3.28l12.47,6.56l4.59,4.92l0.66,5.25l9.19,2.63l1.97,4.27l8.2,-0.98l11.49,1.97l7.22,-6.24l3.61,0.33l6.89,-6.24l4.27,-1.31l1.31,-3.94l14.11,-2.63l8.21,-3.94l4.27,-4.92l1.64,-9.19l-1.97,-8.53l-4.59,-6.56l-5.91,-14.11l3.35,-6.87l6.5,-7.24l1.97,2.3l10.83,-1.31l4.59,3.61h3.61l-0.33,8.2l2.95,5.58l-1.64,1.31l3.61,2.95l-1.31,4.27l0.98,5.91l8.86,-4.92l12.47,-0.66l1.31,2.3l7.22,1.64l16.74,-2.63l4.59,-5.25l-5.58,-4.92l-5.25,0.33l-4.92,-4.59l0.99,-1.64l-2.3,-3.28l-4.92,-0.98l-6.89,-4.27l-5.58,0.33l-4.92,-4.27l-2.63,1.64l-1.97,-2.63l1.64,-3.28l-1.31,-3.94l2.63,-2.3l12.14,-3.28l3.28,1.31l7.22,-0.66l7.22,-8.86l-1.64,-2.95l1.64,-6.56l8.21,-10.83l-1.31,-2.63l6.89,0.66l0.98,-1.31l3.94,1.97l0.98,4.27l6.24,6.89l1.31,6.89l7.32,0.5l0,0l-0.43,0.16l0,0l-4.59,3.28l-4.92,-0.33l-0.33,3.28l4.27,2.3l0.66,1.31l-2.63,1.31l3.61,2.3l0.98,1.64l-1.31,1.64l4.92,5.91l9.19,-0.98l2.63,2.95l5.58,-0.33l5.58,-5.91l8.86,-1.64l0.98,3.61l1.64,-2.95h1.97l0,0l0.31,-0.37l0,0l2.65,4.96l-0.66,4.27l-9.19,3.94l-2.63,2.95l-2.3,7.22l2.63,7.55l2.95,3.28l4.92,1.64l0.33,5.91l6.89,1.31l5.25,4.27l4.92,-0.33l2.63,-2.3l2.63,-10.17l4.92,-6.24l1.97,-0.66l1.97,1.97l1.97,-1.97l2.3,1.31l2.3,1.64l-2.3,5.25l1.13,6.07l-3.98,6.29l2.15,1.82l-1.66,5.96l-2.98,-0.66v5.8l-4.31,0.83l-5.3,12.59l-4.97,-1.66l-3.98,1.66l-1.16,5.3l-2.98,3.15l-4.8,1.66l-0.17,2.82l-7.45,3.48l-2.32,3.64l2.32,8.94l-0.33,6.63l2.98,7.78l4.31,3.64l-1.99,2.48l1.33,6.54l-5.96,4.47l0.33,1.99l-9.11,2.32l-2.98,4.64l-6.29,2.82l-7.79,6.29l-1.16,5.13l-3.81,2.82l-3.48,7.62l-2.65,1.66l-8.45,18.55l1.16,4.97l-2.82,2.15l-2.65,6.29l-8.61,-4.14l-3.31,1.66l-7.29,9.61l0.5,3.64l5.13,2.15l1.66,3.31l-0.83,1.99l6.29,6.13l23.52,-0.33l2.65,5.13l8.12,4.71l4.11,-2.39l5.47,1.66l9.61,-17.06l1.99,0.17l3.81,-3.48l12.09,1.32l5.63,-2.48l2.98,1.66l0.33,6.79l3.97,1.66l4.47,9.28l2.32,-0.83l3.64,4.97l-15.9,11.76l-2.65,3.31l0.5,1.49l-17.23,5.8l-9.61,-3.48l-11.43,-7.79l-5.63,-0.83l-2.82,2.82l-3.64,0.17l-8.38,-8.85l-2.51,1.4l-5.47,-2.48l-1.33,-3.81l-2.98,-0.66l-8.12,10.1l-1.66,3.64l0.46,5.05l-6.96,7.95l2.32,2.82l-1.99,12.26l-2.98,-1.49l-5.63,3.15l-6.96,-2.82l-6.29,2.18l-5.14,-3.92l-2.32,3.31l-21.04,-2.15l-6.63,6.13l1.66,6.63l-5.13,7.95l1.33,5.96l7.79,4.31l-0.99,13.75l-3.97,9.11l-3.48,3.64l-5.3,2.32l-3.98,5.96l1.66,4.64l4.64,3.81l-0.17,6.13l5.96,-0.33l4.47,8.45l-10.27,9.61l0.33,4.31l-2.82,6.79l3.15,4.64l1.99,7.79l3.15,2.82l-0.83,4.97l2.82,2.98l-0.5,2.65l4.31,0.66l5.3,7.37l2.65,0.99l7.79,8.45l1.99,3.31l-0.83,1.99l8.94,2.98l0.66,3.48l5.96,6.63l0.83,3.15l3.48,1.16l4.14,4.8l-0.17,1.99l3.64,2.48l0,0l-0.76,1.63" 
                  id="linija" 
                  sodipodi:nodetypes="cssssssssssssssssssssssssssssssssc">
               </path>
           </svg>


           <select name="" id="opcije" onChange="uradinesto()" class = "hide">
            
            
            </select>
            <select name="" id="opcije2" onChange="uradinesto2()" >
            
            
            </select>
            </div>

            
            <div class = "right" >

            <div id="brojevi">
            <?php 
                $prvi = mysqli_query($mysqli, "SELECT SUM(NumOfVoters) as total FROM ElectionUnit");
                $row = mysqli_fetch_assoc($prvi);
                $drugi = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Unit_Name)) as total2 FROM ElectionUnit"); 
                $row2 = mysqli_fetch_assoc($drugi);
                $treci = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Candidate)) as total3 FROM Votes v WHERE v.Position = 3");
                $row3 = mysqli_fetch_assoc($treci);
            ?>
            <div class = "card" id = "prva">
                <h2>Broj birača:</h2><br>
                <h1><?php echo $row['total'] ?></h1>
            </div>        
            <div class = "card">
                <h2>Broj biračkih mjesta:</h2>
                <h1><?php echo $row2['total2']?></h1>
            </div> 
            <div class = "card">
                <h2>Broj subjekata:</h2>
                <h1><?php echo $row3['total3']?></h1>
            </div> 

        </div>
            <table class="tabela" id="tabela">
                    
                    
                </table>
            </div>
            <script src="Script/scripta.js"> </script>
    </body>
</html>