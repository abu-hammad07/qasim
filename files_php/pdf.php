<?php
require('vendor/autoload.php');

$html = '
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .header {
        text-align: center;
        font-weight: bold;
        font-size: 1.2em;
        padding: 5px;
        border: 1px solid black;
        background-color: #e0e0e0;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 6px;
        font-size: 0.8em;
    }
    th {
        background-color: #f2f2f2;
         text-align: end;
        font-weight: normal;
    }
    td {
        text-align: center;
    }
    .check-time {
        background-color: #d1e7dd;
        color: #0f5132;
        text-align: center;
    }
    .check-person {
        background-color: #cfe2ff;
        color: #084298;
        text-align: center;
    }
    .red-cross {
        color: red;
    }
    .green-tick {
        color: green;
    }
</style>

<div class="table-responsive">
    <div class="header">PRE-OPERATIONAL INSPECTION FORM (SSOP-01)</div>
    <table>
        <thead>
            <tr>
                <th class="check-time">Date of Check</th>
                <th class="check-time">Time of Check</th>
                <th class="check-person">Person of Check</th>
            </tr>
            <tr>
                <td class="check-time" id="date">2024-06-19</td>
                <td class="check-time">08:00 AM</td>
                <td class="check-person">John Doe</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. No condensation</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>2. No rodent, roaches, or gnat</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>3. Handwash station - paper, soap, hot water</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>4. Inedible room and barrels</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>5. Receiving area</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>6. Killing area walls, ceiling, floor</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>7. Kill room knives, cones, tables, conveyor</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>8. Kill room product cans</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>9. Picking area walls, ceiling, floor</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>10. Picking area picker</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>11. Scald vat</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>12. Evisceration table, conveyor, tanks, utensils</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>13. Evisceration walls, ceiling, floor</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>14. Giblet table, utensils</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>15. Chill tanks</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>16. Scale, shovels</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>17. Ice machines</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>18. Hand trucks and dollies</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>19. Packing area walls, ceiling</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>20. Packing scales, tables, utensils</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>21. Coolers and freezer</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>22. All contact surfaces are intact no chipping blades or contact surfaces.</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>23. Cooler #1 temp (36F if overnight storage, ≤40F if no overnight storage)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>24. Cooler #2 temp (36F if overnight storage, ≤40F if no overnight storage)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>25. Freezer temp (≤20F)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>26. PAA concentration Wash Station (50-2,000ppm)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>27. PAA concentration Chiller & Dip (50-2,000ppm)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>28. PAA concentration Sprayer (50-2,000ppm)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>29. Scalding water temperature (2136F)</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>30. No rodent droppings, no rodent or pest activities</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
            <tr>
                <th>31. Others</th>
                <td colspan="2" class="green-tick">✓</td>
            </tr>
        </tbody>
    </table>
</div>';

$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
$mpdf->WriteHTML($html);
$file = 'media/' . time() . '.pdf';
$mpdf->Output($file, 'D');
?>
