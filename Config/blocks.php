<?php

$vAttributes = include(base_path() . '/Modules/Isite/Config/standardValuesForBlocksAttributes.php');

return [
  "block" => [
    "title" => "Bloque",
    "systemName" => "x-ibuilder::block",
    "nameSpace" => "Modules\Ibuilder\View\Components\Block",
    "internal" => true,
    "attributes" => [
      "general" => [
        "title" => "General",
        "fields" => [
          "id" => [
            "name" => "id",
            "type" => "input",
            "props" => [
              "label" => "Ingresar el id",
              "type" => "text"
            ]
          ],
          "container" => [
            "name" => "container",
            "type" => "select",
            "props" => [
              "label" => "Tipo de contenedor",
              "options" => $vAttributes["containers"]
            ]
          ],
          /*"borderForm" => [
              "name" => "borderForm",
              "value" => "rounded-0",
              "type" => "select",
              "props" => [
                  "label" => "background container",
                  "options" => [
                      ["label" => "todos los lados", "value" => "rounded"],
                      ["label" => "esquinas arriba redondeado", "value" => "rounded-top"],
                      ["label" => "esquinas de la derecha redondeado", "value" => "rounded-right"],
                      ["label" => "esquinas de abajo redondeado", "value" => "rounded-bottom"],
                      ["label" => "esquinas de la izquierda redondeado", "value" => "rounded-left"],
                      ["label" => "en ciruclo", "value" => "rounded-circle"],
                      ["label" => "por defecto", "value" => "rounded-0"]
                  ]
              ]
          ],
          "display" => [
              "name" => "display",
              "value" => "none",
              "type" => "select",
              "props" => [
                  "label" => "display container",
                  "options" => $vAttributes["display"]
              ]
          ],
          "widthContainer" => [
              "name" => "widthContainer",
              "type" => "input",
              "props" => [
                  "label" => "Ancho del contenedor",
                  "type" => "number"
              ]
          ],
          "heightContainer" => [
              "name" => "heightContainer",
              "type" => "input",
              "props" => [
                  "label" => "Alto del contenedor",
                  "type" => "number"
              ]
          ],
          "paddingX" => [
              "name" => "paddingX",
              "type" => "input",
              "props" => [
                  "label" => "padding large",
                  "type" => "number"
              ]
          ],
          "paddingY" => [
              "name" => "paddingY",
              "type" => "input",
              "props" => [
                  "label" => "padding lenght",
                  "type" => "number"
              ]
          ],
          "marginX" => [
              "name" => "marginX",
              "type" => "input",
              "props" => [
                  "label" => "margin large",
                  "type" => "number"
              ]
          ],
          "marginY" => [
              "name" => "marginY",
              "type" => "input",
              "props" => [
                  "label" => "margin lenght",
                  "type" => "number"
              ]
          ],
          "backgrounds" => [
          "name" => "backgrounds",
          "type" => "json",
          "value" => "[{'position':'',
                        'size':'',
                        'repeat':'',
                        'color':'',
                        'backgroundAttachment':''
                      }]",
          "props" => [
            "label" => "datos json",
          ]
        ],
          */
          "overlay" => [
            "name" => "overlay",
            "value" => false,
            "type" => "select",
            "props" => [
              "label" => "Opacidad",
              "options" => [
                ["label" => "false", "value" => false],
                ["label" => "true", "value" => true]
              ]
            ]
          ],
          "backgroundColor" => [
            "name" => "backgroundColor",
            "value" => "",
            "type" => "input",
            "props" => [
              "label" => "Color de fondo"
            ]
          ],
          "row" => [
            "name" => "row",
            "value" => "justify-content-center align-items-center",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Fila (Alineación vertical y horizontal)",
            ]
          ],
          "columns" => [
            "name" => "columns",
            "value" => "col-12",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Columnas",
            ]
          ],
          "blockClasses" => [
            "name" => "blockClasses",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Bloque de Clases"
            ]
          ],
          "blockStyle" => [
            "name" => "blockStyle",
            "value" => "",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Bloque de Estilos",
              'type' => 'textarea',
              'rows' => 10,
            ]
          ],
        ]
      ]
    ]
  ],
  "custom" => [
    "title" => "Entorno Custom",
    "systemName" => "ibuilder::block-custom",
    "nameSpace" => "Modules\Ibuilder\View\Components\BlockCustom",
    "contentFields" => [
      "titleCustom" => [
        "name" => "titleCustom",
        "type" => "input",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (titulo)"
        ]
      ],
      "subTitleCustom" => [
        "name" => "subTitleCustom",
        "type" => "input",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (Subtitulo)"
        ]
      ],
      "summaryCustom" => [
        "name" => "summaryCustom",
        "type" => "input",
        "columns" => "col-12",
        "isTranslatable" => true,
        "props" => [
          "label" => "Texto (Resumen)",
          'type' => 'textarea',
          'rows' => 4,
        ]
      ],
      "descriptionCustom" => [
         "name" => "descriptionCustom",
         "type" => "html",
         "isTranslatable" => true,
         "columns" => "col-12",
         "props" => [
            "label" => "Descripcion"
         ]
      ],
    ],
    "attributes" => [
      "general" => [
        "title" => "General",
        "fields" => [
          "position" => [
            "name" => "position",
            "value" => "1",
            "type" => "select",
            "columns" => "col-12",
            "props" => [
              "label" => "Posicion de los elementos",
              "options" => [
                ["label" => "Una columna", "value" => "1"],
                ["label" => "Dos columna con imagen a la derecha", "value" => "2"],
                ["label" => "Dos columna con imagen a la izquierda", "value" => "3"],
                ["label" => "Dos columna con video a la derecha", "value" => "4"],
                ["label" => "Dos columna con video a la izquierda", "value" => "5"]
              ],
            ]
          ],
          "mediaClasses" => [
            "name" => "mediaClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en Imagen o Video"
            ]
          ],
          "contentClasses" => [
            "name" => "contentClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en contenido"
            ]
          ],
          "gridColumns" => [
            "name" => "gridColumns",
            "value" => "repeat(2, minmax(0, 1fr))",
            "type" => "input",
            "props" => [
              "label" => "Ancho de columnas"
            ]
          ],
          "gridGap" => [
            "name" => "gridGap",
            "value" => "15px",
            "type" => "input",
            "props" => [
              "label" => "Espacio entre columnas"
            ]
          ],
          "orderClasses" => [
            "name" => "orderClasses",
            "value" => ["video" => "order-0", "image" => "order-1", "title" => "order-2", "subtitle" => "order-3", "summary" => "order-4", "description" => "order-5", "buttom" => "order-6"],
            "type" => "json",
            "columns" => "col-12",
            "props" => [
              "label" => "Orden de los elementos"
            ]
          ],
        ]
      ],
      "text" => [
        "title" => "Contenido",
        "fields" => [
          "titleClasses" => [
            "name" => "titleClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (titulo)"
            ]
          ],
          "titleSize" => [
            "name" => "titleSize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (titulo)"
            ]
          ],
          "subTitleClasses" => [
            "name" => "subTitleClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (Subtitulo)"
            ]
          ],
          "subTitleSize" => [
            "name" => "subTitleSize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (Subtitulo)"
            ]
          ],
          "summaryClasses" => [
            "name" => "summaryClasses",
            "type" => "input",
            "columns" => "col-md-7",
            "props" => [
              "label" => "Clases (Resumen)"
            ]
          ],
          "summarySize" => [
            "name" => "summarySize",
            "type" => "input",
            "columns" => "col-md-5",
            "props" => [
              "label" => "Tamaño Fuente (Resumen)"
            ]
          ],
        ]
      ],
      "media" => [
        "title" => "Imagen y Video",
        "fields" => [
          "image" => [
            "name" => "image",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Url de la Imagen"
            ]
          ],
          "imageOnClasses" => [
            "name" => "imageOnClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases sobre (Imagen)"
            ]
          ],
          "imageInClasses" => [
            "name" => "imageInClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases en (Imagen)"
            ]
          ],
          "imageStyles" => [
            "name" => "imageStyles",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Estilos adicionales (Imagen)"
            ]
          ],
          "video" => [
            "name" => "video",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Url del video"
            ]
          ],
          "videoResponsive" => [
            "name" => "videoResponsive",
            "type" => "select",
            "columns" => "col-12",
            "props" => [
              "label" => "Responsive (Video)",
              "options" => $vAttributes["embedResponsive"]
            ]
          ],
          "videoClasses" => [
            "name" => "videoClasses",
            "type" => "input",
            "columns" => "col-12",
            "props" => [
              "label" => "Clases (Video)"
            ]
          ],
        ]
      ],
      "boton" => [
        "title" => "Boton",
        "fields" => [
          "withButton" => [
            "name" => "withButton",
            "value" => "0",
            "type" => "select",
            "props" => [
              "label" => "Mostrar",
              "options" => $vAttributes["validation"]
            ]
          ],
          "buttonLabel" => [
            "name" => "buttonLabel",
            "type" => "input",
            "props" => [
              "label" => "Texto"
            ]
          ],
          "buttonSizeLabel" => [
            "name" => "buttonSizeLabel",
            "type" => "input",
            "props" => [
              "label" => "Tamaño del texto",
              "type" => "number"
            ]
          ],
          "buttonIconClass" => [
            "name" => "buttonIconClass",
            "type" => "input",
            "props" => [
              "label" => "Tipo de Icono"
            ]
          ],
          "buttonIconPosition" => [
            "name" => "buttonIconPosition",
            "value" => "left",
            "type" => "select",
            "props" => [
              "label" => "Posición del icono",
              "options" => [
                ["label" => "Izquierda", "value" => "left"],
                ["label" => "Derecha", "value" => "right"]
              ]
            ]
          ],
          "buttonLayout" => [
            "name" => "buttonLayout",
            "value" => "",
            "type" => "select",
            "props" => [
              "label" => "Estilo de Botones",
              "options" => $vAttributes["buttonStyle"]
            ]
          ],
          "buttonStyle" => [
            "name" => "buttonStyle",
            "value" => "button-normal",
            "type" => "select",
            "props" => [
              "label" => "Espaciado",
              "options" => $vAttributes["buttonType"]
            ]
          ],
          "buttonClasses" => [
            "name" => "buttonClasses",
            "type" => "input",
            "props" => [
              "label" => "Clases en general",
            ]
          ],
          "buttonAlign" => [
            "name" => "buttonAlign",
            "type" => "select",
            "props" => [
              "label" => "Alineación",
              "options" => $vAttributes["align"]
            ]
          ],
          "buttonHref" => [
            "name" => "buttonHref",
            "type" => "input",
            "props" => [
              "label" => "Enlace"
            ]
          ],
          "buttonTarget" => [
            "name" => "buttonTarget",
            "type" => "select",
            "props" => [
              "label" => "Target",
              "options" => $vAttributes["target"]
            ]
          ],
          "buttonColor" => [
            "name" => "buttonColor",
            "value" => "primary",
            "type" => "select",
            "props" => [
              "label" => "Color",
              "options" => $vAttributes["bgColor"]
            ]
          ],
        ]
      ],
    ]
  ]
];
