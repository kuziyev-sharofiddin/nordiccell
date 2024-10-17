<?php
/**
 * @author sharofiddin <qoziyevsharofiddin199805@gmail.com>
 * @link https://t.me/sharofiddin_komilovich
 * @date 01/09/2024, 15:28
 */
$parentCategories = PartentCategory::all();
?>

<div class="wrap-nav-content">
    <ul class="wrap-category">
        @foreach($parentCategories as $parentCategory)
            <li class="cat-item cat-item-1418"><a href="{{route('parent-category',$parentCategory->id)}}">Labware</a>
                <ul class='children'>
                    @php
                        $categories = $parentCategory->categories();
                    @endphp
                    @foreach($categories as $category)
                        <li class="cat-item cat-item-1419"><a href="{{route('category',$category->id)}}">Lab
                                Plastics</a>
                            @php
                                $subCategories = $category->subCategories();
                            @endphp
                            <ul class='children'>
                                @foreach($subCategories as $subCategory)
                                    <li class="cat-item cat-item-1421"><a
                                                href="{{route('sub-category',$subCategory->id)}}">Dishes</a>
                                        <ul class='children'>
                                            @php
                                                $subCategoryItems = $subCategory->subCategoryItems()
                                            @endphp
                                            @foreach($subCategoryItems as $subCategoryItem)
                                                <li class="cat-item cat-item-1422"><a
                                                            href="product-category/ivf-lab/lab-plastics/dishes/multi-well-dishes/index.htm">Multi
                                                        Well Dishes</a>
                                                </li>
                                            @endforeach
                                            <li class="cat-item cat-item-1423"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/center-well-dishes/index.htm">Center
                                                    Well Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1424"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/micromanipulation-dishes/index.htm">Micromanipulation
                                                    Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1425"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/100mm-dishes/index.htm">100
                                                    mm Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1426"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/60mm-dishes/index.htm">60
                                                    mm
                                                    Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1427"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/35mm-dishes/index.htm">35
                                                    mm
                                                    Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1952"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/mini-well-dishes/index.htm">Mini
                                                    Well Dishes</a>
                                            </li>
                                            <li class="cat-item cat-item-1429"><a
                                                        href="product-category/ivf-lab/lab-plastics/dishes/glass-bottom-dishes/index.htm">Glass
                                                    Bottom Dishes</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach

                                <li class="cat-item cat-item-1430"><a
                                            href="product-category/ivf-lab/lab-plastics/snap-cap-tubes/index.htm">Snap-Cap
                                        Tubes</a>
                                </li>
                                <li class="cat-item cat-item-1431"><a
                                            href="product-category/ivf-lab/lab-plastics/centrifuge-tubes/index.htm">Centrifuge
                                        Tubes</a>
                                </li>
                                <li class="cat-item cat-item-1947"><a
                                            href="product-category/ivf-lab/lab-plastics/sperm-separation/index.htm">Sperm
                                        Separation</a>
                                </li>
                                <li class="cat-item cat-item-1432"><a
                                            href="product-category/ivf-lab/lab-plastics/containers/index.htm">Containers</a>
                                </li>
                                <li class="cat-item cat-item-1433"><a
                                            href="product-category/ivf-lab/lab-plastics/media-flasks/index.htm">Media
                                        Flasks</a>
                                </li>
                                <li class="cat-item cat-item-4014"><a
                                            href="product-category/ivf-lab/lab-plastics/lab-plastics-syringes/index.htm">Syringes</a>
                                </li>
                            </ul>
                        </li>
                    @endforeach

                    <li class="cat-item cat-item-1434"><a href="product-category/ivf-lab/laboratory-pipettes/index.htm">Lab
                            Pipettes</a>
                        <ul class='children'>
                            <li class="cat-item cat-item-1521"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/pipette-tips/index.htm">Pipette
                                    Tips</a>
                                <ul class='children'>
                                    <li class="cat-item cat-item-1859"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/pipette-tips/mea-pipette-tips/index.htm">MEA
                                            Tested Pipette Tips</a>
                                    </li>
                                    <li class="cat-item cat-item-1860"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/pipette-tips/biopur-pipette-tips/index.htm">Biopur
                                            Pipette Tips</a>
                                    </li>
                                    <li class="cat-item cat-item-1861"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/pipette-tips/dualfilter-pipette-tips/index.htm">Dualfilter
                                            Pipette Tips</a>
                                    </li>
                                    <li class="cat-item cat-item-2252"><a
                                                href="product/05-20-ul-geloader-sterile-box-96/index.htm">GELoader
                                            Tips</a>
                                    </li>
                                    <li class="cat-item cat-item-1862"><a href="product/combitips-adv-biopur/index.htm">Combitips</a>
                                    </li>
                                    <li class="cat-item cat-item-1863"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/pipette-tips/serological-pipettes/index.htm">Serological
                                            Pipettes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-1435"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/index.htm">Manual
                                    Pipettes</a>
                                <ul class='children'>
                                    <li class="cat-item cat-item-1439"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/eppendorf-research-plus-manual/index.htm">Eppendorf
                                            Research Plus</a>
                                    </li>
                                    <li class="cat-item cat-item-1440"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/finnpipette-f1-manual/index.htm">Finnpipette
                                            F1</a>
                                    </li>
                                    <li class="cat-item cat-item-1441"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/finnpipette-f2-maual/index.htm">Finnpipette
                                            F2</a>
                                    </li>
                                    <li class="cat-item cat-item-1442"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/electronic-pipettes-manual/index.htm">Electronic
                                            Pipettes</a>
                                    </li>
                                    <li class="cat-item cat-item-1447"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/multistep-pipettes-manual/index.htm">Multistep
                                            Pipettes</a>
                                    </li>
                                    <li class="cat-item cat-item-1449"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/pipette-controllers-manual/index.htm">Pipette
                                            Controllers</a>
                                    </li>
                                    <li class="cat-item cat-item-1443"><a
                                                href="product-category/ivf-lab/laboratory-pipettes/manual-pipettes/pipette-racks-manual/index.htm">Pipette
                                            Racks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-1444"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/glass-pasteur-pipettes/index.htm">Glass
                                    Pasteur Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1445"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/plastic-pipettes/index.htm">Plastic
                                    Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1450"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/handling-pipettes/index.htm">Handling
                                    Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1451"><a
                                        href="product-category/ivf-lab/laboratory-pipettes/mouth-pipettes/index.htm">Mouth
                                    Pipettes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="cat-item cat-item-1453"><a href="product-category/ivf-lab/micromanipulation/index.htm">Micromanipulation</a>
                        <ul class='children'>
                            <li class="cat-item cat-item-1454"><a href="product/holding-pipettes/index.htm">Holding
                                    Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1455"><a
                                        href="product-category/ivf-lab/micromanipulation/injection-pipettes/index.htm">Injection
                                    Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1456"><a href="product/biopsi-pipette-30-id30-ba90/index.htm">Biopsy
                                    Pipettes</a>
                            </li>
                            <li class="cat-item cat-item-1457"><a
                                        href="product-category/ivf-lab/micromanipulation/denuding-pipettes/index.htm">Denuding
                                    Pipettes</a>
                                <ul class='children'>
                                    <li class="cat-item cat-item-1458"><a
                                                href="product-category/ivf-lab/micromanipulation/denuding-pipettes/glass-capillaries/index.htm">Glass
                                            Capillaries</a>
                                    </li>
                                    <li class="cat-item cat-item-1459"><a
                                                href="product/strip-id-denuding-pipette/index.htm">Flexible
                                            Capillaries</a>
                                    </li>
                                    <li class="cat-item cat-item-1460"><a
                                                href="product-category/ivf-lab/micromanipulation/denuding-pipettes/micropipettes/index.htm">Micropipettes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-1461"><a
                                        href="product-category/ivf-lab/micromanipulation/dishes-micromanipulation/index.htm">Dishes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="cat-item cat-item-1462"><a href="product-category/ivf-lab/marking-labelling/index.htm">Marking
                            and Labelling</a>
                        <ul class='children'>
                            <li class="cat-item cat-item-1463"><a
                                        href="product-category/ivf-lab/marking-labelling/cryopens/index.htm">Cryo
                                    Pens</a>
                            </li>
                            <li class="cat-item cat-item-2211"><a
                                        href="product-category/ivf-lab/marking-labelling/brady-labels/index.htm">Brady
                                    Labels</a>
                                <ul class='children'>
                                    <li class="cat-item cat-item-1466"><a
                                                href="product-category/ivf-lab/marking-labelling/brady-labels/bmp51-labels/index.htm">BMP51
                                            Labels</a>
                                    </li>
                                    <li class="cat-item cat-item-3245"><a
                                                href="product-category/ivf-lab/marking-labelling/brady-labels/bmp51-m510-labels/index.htm">BMP51
                                            &amp; M510 Labels</a>
                                    </li>
                                    <li class="cat-item cat-item-3247"><a
                                                href="product-category/ivf-lab/marking-labelling/brady-labels/m710-bmp71-labels/index.htm">M710
                                            &amp; BMP71 Labels</a>
                                    </li>
                                    <li class="cat-item cat-item-3246"><a
                                                href="product/cryo-straw-label-m619427/index.htm">M610,
                                            M611, BMP61 and M710 Labels</a>
                                    </li>
                                    <li class="cat-item cat-item-1467"><a
                                                href="product-category/ivf-lab/marking-labelling/brady-labels/bbp12-labels/index.htm">BBP12
                                            Labels</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item cat-item-1464"><a
                                        href="product-category/ivf-lab/marking-labelling/label-printers/index.htm">Label
                                    Printers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="cat-item cat-item-1452"><a href="product-category/ivf-lab/ivf-racks/index.htm">IVF
                            Racks</a>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
</div>

