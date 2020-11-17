<?php

use Illuminate\Database\Seeder;

class UniversityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('university')->delete();
        
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '北京大学',
                'city' => '北京市',
                'code' => '4111010001',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '中国人民大学',
                'city' => '北京市',
                'code' => '4111010002',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '清华大学',
                'city' => '北京市',
                'code' => '4111010003',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '北京交通大学',
                'city' => '北京市',
                'code' => '4111010004',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '北京工业大学',
                'city' => '北京市',
                'code' => '4111010005',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '北京航空航天大学',
                'city' => '北京市',
                'code' => '4111010006',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '北京理工大学',
                'city' => '北京市',
                'code' => '4111010007',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '北京科技大学',
                'city' => '北京市',
                'code' => '4111010008',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '北方工业大学',
                'city' => '北京市',
                'code' => '4111010009',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '北京化工大学',
                'city' => '北京市',
                'code' => '4111010010',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '北京工商大学',
                'city' => '北京市',
                'code' => '4111010011',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '北京服装学院',
                'city' => '北京市',
                'code' => '4111010012',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '北京邮电大学',
                'city' => '北京市',
                'code' => '4111010013',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '北京印刷学院',
                'city' => '北京市',
                'code' => '4111010015',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '北京建筑大学',
                'city' => '北京市',
                'code' => '4111010016',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '北京石油化工学院',
                'city' => '北京市',
                'code' => '4111010017',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '北京电子科技学院',
                'city' => '北京市',
                'code' => '4111010018',
                'supervisor' => '中央办公厅',
                'level' => '本科',
                'type' => '公办',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '中国农业大学',
                'city' => '北京市',
                'code' => '4111010019',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '北京农学院',
                'city' => '北京市',
                'code' => '4111010020',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '北京林业大学',
                'city' => '北京市',
                'code' => '4111010022',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '北京协和医学院',
                'city' => '北京市',
                'code' => '4111010023',
                'supervisor' => '国家卫生健康委员会',
                'level' => '本科',
                'type' => '公办',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '首都医科大学',
                'city' => '北京市',
                'code' => '4111010025',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '北京中医药大学',
                'city' => '北京市',
                'code' => '4111010026',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '北京师范大学',
                'city' => '北京市',
                'code' => '4111010027',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '首都师范大学',
                'city' => '北京市',
                'code' => '4111010028',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '首都体育学院',
                'city' => '北京市',
                'code' => '4111010029',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '北京外国语大学',
                'city' => '北京市',
                'code' => '4111010030',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '北京第二外国语学院',
                'city' => '北京市',
                'code' => '4111010031',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '北京语言大学',
                'city' => '北京市',
                'code' => '4111010032',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '中国传媒大学',
                'city' => '北京市',
                'code' => '4111010033',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '中央财经大学',
                'city' => '北京市',
                'code' => '4111010034',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '对外经济贸易大学',
                'city' => '北京市',
                'code' => '4111010036',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '北京物资学院',
                'city' => '北京市',
                'code' => '4111010037',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '首都经济贸易大学',
                'city' => '北京市',
                'code' => '4111010038',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '中国消防救援学院',
                'city' => '北京市',
                'code' => '4111010039',
                'supervisor' => '应急管理部',
                'level' => '本科',
                'type' => '公办',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '外交学院',
                'city' => '北京市',
                'code' => '4111010040',
                'supervisor' => '外交部',
                'level' => '本科',
                'type' => '公办',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '中国人民公安大学',
                'city' => '北京市',
                'code' => '4111010041',
                'supervisor' => '公安部',
                'level' => '本科',
                'type' => '公办',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '国际关系学院',
                'city' => '北京市',
                'code' => '4111010042',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '北京体育大学',
                'city' => '北京市',
                'code' => '4111010043',
                'supervisor' => '国家体育总局',
                'level' => '本科',
                'type' => '公办',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '中央音乐学院',
                'city' => '北京市',
                'code' => '4111010045',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '中国音乐学院',
                'city' => '北京市',
                'code' => '4111010046',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '中央美术学院',
                'city' => '北京市',
                'code' => '4111010047',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '中央戏剧学院',
                'city' => '北京市',
                'code' => '4111010048',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '中国戏曲学院',
                'city' => '北京市',
                'code' => '4111010049',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '北京电影学院',
                'city' => '北京市',
                'code' => '4111010050',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '北京舞蹈学院',
                'city' => '北京市',
                'code' => '4111010051',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => '中央民族大学',
                'city' => '北京市',
                'code' => '4111010052',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => '中国政法大学',
                'city' => '北京市',
                'code' => '4111010053',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => '华北电力大学',
                'city' => '北京市',
                'code' => '4111010054',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => '中华女子学院',
                'city' => '北京市',
                'code' => '4111011149',
                'supervisor' => '中华妇女联合会',
                'level' => '本科',
                'type' => '公办',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => '北京信息科技大学',
                'city' => '北京市',
                'code' => '4111011232',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => '中国矿业大学（北京）',
                'city' => '北京市',
                'code' => '4111011413',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => '中国石油大学（北京）',
                'city' => '北京市',
                'code' => '4111011414',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => '中国地质大学（北京）',
                'city' => '北京市',
                'code' => '4111011415',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => '北京联合大学',
                'city' => '北京市',
                'code' => '4111011417',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => '北京城市学院',
                'city' => '北京市',
                'code' => '4111011418',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => '中国青年政治学院',
                'city' => '北京市',
                'code' => '4111011625',
                'supervisor' => '共青团中央',
                'level' => '本科',
                'type' => '公办',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => '首钢工学院',
                'city' => '北京市',
                'code' => '4111011831',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => '中国劳动关系学院',
                'city' => '北京市',
                'code' => '4111012453',
                'supervisor' => '中华全国总工会',
                'level' => '本科',
                'type' => '公办',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => '首都师范大学科德学院',
                'city' => '北京市',
                'code' => '4111013629',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => '北京工商大学嘉华学院',
                'city' => '北京市',
                'code' => '4111013630',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => '北京邮电大学世纪学院',
                'city' => '北京市',
                'code' => '4111013901',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => '北京工业大学耿丹学院',
                'city' => '北京市',
                'code' => '4111013904',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => '北京警察学院',
                'city' => '北京市',
                'code' => '4111014019',
                'supervisor' => '北京市',
                'level' => '本科',
                'type' => '公办',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => '北京第二外国语学院中瑞酒店管理学院',
                'city' => '北京市',
                'code' => '4111014201',
                'supervisor' => '北京市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => '中国科学院大学',
                'city' => '北京市',
                'code' => '4111014430',
                'supervisor' => '中国科学院',
                'level' => '本科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => '中国社会科学院大学',
                'city' => '北京市',
                'code' => '4111014596',
                'supervisor' => '中国社会科学院',
                'level' => '本科',
                'type' => '公办',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => '北京工业职业技术学院',
                'city' => '北京市',
                'code' => '4111010853',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => '北京信息职业技术学院',
                'city' => '北京市',
                'code' => '4111010857',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => '北京电子科技职业学院',
                'city' => '北京市',
                'code' => '4111010858',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => '北京京北职业技术学院',
                'city' => '北京市',
                'code' => '4111011090',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => '北京交通职业技术学院',
                'city' => '北京市',
                'code' => '4111011092',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => '北京青年政治学院',
                'city' => '北京市',
                'code' => '4111011626',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => '北京农业职业学院',
                'city' => '北京市',
                'code' => '4111012448',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => '北京政法职业学院',
                'city' => '北京市',
                'code' => '4111012451',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => '北京财贸职业学院',
                'city' => '北京市',
                'code' => '4111012561',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => '北京北大方正软件职业技术学院',
                'city' => '北京市',
                'code' => '4111012564',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => '北京经贸职业学院',
                'city' => '北京市',
                'code' => '4111012565',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => '北京经济技术职业学院',
                'city' => '北京市',
                'code' => '4111012566',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => '北京戏曲艺术职业学院',
                'city' => '北京市',
                'code' => '4111012567',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => '北京汇佳职业学院',
                'city' => '北京市',
                'code' => '4111012568',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => '北京科技经营管理学院',
                'city' => '北京市',
                'code' => '4111012733',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => '北京科技职业学院',
                'city' => '北京市',
                'code' => '4111013703',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => '北京培黎职业学院',
                'city' => '北京市',
                'code' => '4111013728',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '北京经济管理职业学院',
                'city' => '北京市',
                'code' => '4111014073',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => '北京劳动保障职业学院',
                'city' => '北京市',
                'code' => '4111014075',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => '北京社会管理职业学院',
                'city' => '北京市',
                'code' => '4111014139',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => '北京艺术传媒职业学院',
                'city' => '北京市',
                'code' => '4111014140',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => '北京体育职业学院',
                'city' => '北京市',
                'code' => '4111014215',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => '北京交通运输职业学院',
                'city' => '北京市',
                'code' => '4111014279',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => '北京卫生职业学院',
                'city' => '北京市',
                'code' => '4111014395',
                'supervisor' => '北京市',
                'level' => '专科',
                'type' => '公办',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => '北京网络职业学院',
                'city' => '北京市',
                'code' => '4111014588',
                'supervisor' => '北京市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => '中国人民解放军国防大学',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '中央军委',
                'level' => NULL,
                'type' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => '中国人民解放军陆军装甲兵学院',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => '中国人民解放军陆军航空兵学院',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => '中国人民解放军陆军防化学院',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => '中国人民解放军空军指挥学院',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => '中国人民解放军战略支援部队航天工程大学',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '战略支援部队航天系统部',
                'level' => NULL,
                'type' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => '中国人民武装警察部队特种警察学院',
                'city' => '北京市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => '南开大学',
                'city' => '天津市',
                'code' => '4112010055',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => '天津大学',
                'city' => '天津市',
                'code' => '4112010056',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => '天津科技大学',
                'city' => '天津市',
                'code' => '4112010057',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => '天津工业大学',
                'city' => '天津市',
                'code' => '4112010058',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => '中国民航大学',
                'city' => '天津市',
                'code' => '4112010059',
                'supervisor' => '交通运输部（中国民用航空局）',
                'level' => '本科',
                'type' => '公办',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => '天津理工大学',
                'city' => '天津市',
                'code' => '4112010060',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => '天津农学院',
                'city' => '天津市',
                'code' => '4112010061',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => '天津医科大学',
                'city' => '天津市',
                'code' => '4112010062',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => '天津中医药大学',
                'city' => '天津市',
                'code' => '4112010063',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => '天津师范大学',
                'city' => '天津市',
                'code' => '4112010065',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => '天津职业技术师范大学',
                'city' => '天津市',
                'code' => '4112010066',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => '天津外国语大学',
                'city' => '天津市',
                'code' => '4112010068',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => '天津商业大学',
                'city' => '天津市',
                'code' => '4112010069',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => '天津财经大学',
                'city' => '天津市',
                'code' => '4112010070',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => '天津体育学院',
                'city' => '天津市',
                'code' => '4112010071',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => '天津音乐学院',
                'city' => '天津市',
                'code' => '4112010072',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => '天津美术学院',
                'city' => '天津市',
                'code' => '4112010073',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => '天津城建大学',
                'city' => '天津市',
                'code' => '4112010792',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => '天津天狮学院',
                'city' => '天津市',
                'code' => '4112010859',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => '天津中德应用技术大学',
                'city' => '天津市',
                'code' => '4112012105',
                'supervisor' => '天津市',
                'level' => '本科',
                'type' => '公办',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => '天津外国语大学滨海外事学院',
                'city' => '天津市',
                'code' => '4112013658',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => '天津体育学院运动与文化艺术学院',
                'city' => '天津市',
                'code' => '4112013659',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => '天津商业大学宝德学院',
                'city' => '天津市',
                'code' => '4112013660',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => '天津医科大学临床医学院',
                'city' => '天津市',
                'code' => '4112013661',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => '南开大学滨海学院',
                'city' => '天津市',
                'code' => '4112013663',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => '天津师范大学津沽学院',
                'city' => '天津市',
                'code' => '4112013896',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => '天津理工大学中环信息学院',
                'city' => '天津市',
                'code' => '4112013897',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => '北京科技大学天津学院',
                'city' => '天津市',
                'code' => '4112013898',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => '天津大学仁爱学院',
                'city' => '天津市',
                'code' => '4112014038',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => '天津财经大学珠江学院',
                'city' => '天津市',
                'code' => '4112014087',
                'supervisor' => '天津市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => '天津市职业大学',
                'city' => '天津市',
                'code' => '4112011032',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => '天津滨海职业学院',
                'city' => '天津市',
                'code' => '4112012484',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => '天津工程职业技术学院',
                'city' => '天津市',
                'code' => '4112012487',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => '天津渤海职业技术学院',
                'city' => '天津市',
                'code' => '4112012719',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => '天津电子信息职业技术学院',
                'city' => '天津市',
                'code' => '4112012720',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => '天津机电职业技术学院',
                'city' => '天津市',
                'code' => '4112012721',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => '天津现代职业技术学院',
                'city' => '天津市',
                'code' => '4112012722',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => '天津公安警官职业学院',
                'city' => '天津市',
                'code' => '4112012723',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => '天津轻工职业技术学院',
                'city' => '天津市',
                'code' => '4112012732',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => '天津商务职业学院',
                'city' => '天津市',
                'code' => '4112012788',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => '天津国土资源和房屋职业学院',
                'city' => '天津市',
                'code' => '4112012803',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => '天津医学高等专科学校',
                'city' => '天津市',
                'code' => '4112012880',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => '天津开发区职业技术学院',
                'city' => '天津市',
                'code' => '4112012881',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => '天津艺术职业学院',
                'city' => '天津市',
                'code' => '4112012882',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => '天津交通职业学院',
                'city' => '天津市',
                'code' => '4112012883',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => '天津工业职业学院',
                'city' => '天津市',
                'code' => '4112013700',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => '天津石油职业技术学院',
                'city' => '天津市',
                'code' => '4112013701',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => '天津城市职业学院',
                'city' => '天津市',
                'code' => '4112013702',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => '天津铁道职业技术学院',
                'city' => '天津市',
                'code' => '4112013863',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => '天津工艺美术职业学院',
                'city' => '天津市',
                'code' => '4112013911',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => '天津城市建设管理职业技术学院',
                'city' => '天津市',
                'code' => '4112014020',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => '天津生物工程职业技术学院',
                'city' => '天津市',
                'code' => '4112014021',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => '天津海运职业学院',
                'city' => '天津市',
                'code' => '4112014022',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => '天津广播影视职业学院',
                'city' => '天津市',
                'code' => '4112014102',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => '天津体育职业学院',
                'city' => '天津市',
                'code' => '4112014599',
                'supervisor' => '天津市',
                'level' => '专科',
                'type' => '公办',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => '天津滨海汽车工程职业学院',
                'city' => '天津市',
                'code' => '4112014600',
                'supervisor' => '天津市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => '中国人民解放军陆军军事交通学院',
                'city' => '天津市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '中国人民解放军海军勤务学院',
                'city' => '天津市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => '中国人民武装警察部队指挥学院',
                'city' => '天津市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => '中国人民武装警察部队后勤学院',
                'city' => '天津市',
                'code' => NULL,
                'supervisor' => '武警后勤',
                'level' => NULL,
                'type' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => '河北大学',
                'city' => '保定市',
                'code' => '4113010075',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => '河北工程大学',
                'city' => '邯郸市',
                'code' => '4113010076',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => '河北地质大学',
                'city' => '石家庄市',
                'code' => '4113010077',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => '河北工业大学',
                'city' => '天津市',
                'code' => '4113010080',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => '华北理工大学',
                'city' => '唐山市',
                'code' => '4113010081',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => '河北科技大学',
                'city' => '石家庄市',
                'code' => '4113010082',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => '河北建筑工程学院',
                'city' => '张家口市',
                'code' => '4113010084',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => '河北水利电力学院',
                'city' => '沧州市',
                'code' => '4113010085',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => '河北农业大学',
                'city' => '保定市',
                'code' => '4113010086',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => '河北医科大学',
                'city' => '石家庄市',
                'code' => '4113010089',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => '河北北方学院',
                'city' => '张家口市',
                'code' => '4113010092',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => '承德医学院',
                'city' => '承德市',
                'code' => '4113010093',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => '河北师范大学',
                'city' => '石家庄市',
                'code' => '4113010094',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => '保定学院',
                'city' => '保定市',
                'code' => '4113010096',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => '河北民族师范学院',
                'city' => '承德市',
                'code' => '4113010098',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => '唐山师范学院',
                'city' => '唐山市',
                'code' => '4113010099',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => '廊坊师范学院',
                'city' => '廊坊市',
                'code' => '4113010100',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => '衡水学院',
                'city' => '衡水市',
                'code' => '4113010101',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => '石家庄学院',
                'city' => '石家庄市',
                'code' => '4113010102',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => '邯郸学院',
                'city' => '邯郸市',
                'code' => '4113010103',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => '邢台学院',
                'city' => '邢台市',
                'code' => '4113010104',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => '沧州师范学院',
                'city' => '沧州市',
                'code' => '4113010105',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => '石家庄铁道大学',
                'city' => '石家庄市',
                'code' => '4113010107',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => '燕山大学',
                'city' => '秦皇岛市',
                'code' => '4113010216',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => '河北科技师范学院',
                'city' => '秦皇岛市',
                'code' => '4113010798',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => '唐山学院',
                'city' => '唐山市',
                'code' => '4113011033',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => '华北科技学院',
                'city' => '廊坊市',
                'code' => '4113011104',
                'supervisor' => '应急管理部',
                'level' => '本科',
                'type' => '公办',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => '中国人民警察大学',
                'city' => '廊坊市',
                'code' => '4113011105',
                'supervisor' => '公安部',
                'level' => '本科',
                'type' => '公办',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => '河北体育学院',
                'city' => '石家庄市',
                'code' => '4113011236',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => '河北金融学院',
                'city' => '保定市',
                'code' => '4113011420',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => '北华航天工业学院',
                'city' => '廊坊市',
                'code' => '4113011629',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => '防灾科技学院',
                'city' => '廊坊市',
                'code' => '4113011775',
                'supervisor' => '中国地震局',
                'level' => '本科',
                'type' => '公办',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => '河北经贸大学',
                'city' => '石家庄市',
                'code' => '4113011832',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => '中央司法警官学院',
                'city' => '保定市',
                'code' => '4113011903',
                'supervisor' => '司法部',
                'level' => '本科',
                'type' => '公办',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => '河北传媒学院',
                'city' => '石家庄市',
                'code' => '4113012784',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => '河北工程技术学院',
                'city' => '石家庄市',
                'code' => '4113012796',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => '河北美术学院',
                'city' => '石家庄市',
                'code' => '4113013075',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => '河北科技学院',
                'city' => '保定市',
                'code' => '4113013391',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => '河北外国语学院',
                'city' => '石家庄市',
                'code' => '4113013402',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => '河北大学工商学院',
                'city' => '保定市',
                'code' => '4113013404',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => '华北理工大学轻工学院',
                'city' => '唐山市',
                'code' => '4113013408',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => '河北科技大学理工学院',
                'city' => '石家庄市',
                'code' => '4113013409',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => '河北师范大学汇华学院',
                'city' => '石家庄市',
                'code' => '4113013411',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => '河北经贸大学经济管理学院',
                'city' => '石家庄市',
                'code' => '4113013414',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => '河北医科大学临床学院',
                'city' => '石家庄市',
                'code' => '4113013415',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => '华北电力大学科技学院',
                'city' => '保定市',
                'code' => '4113013417',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => '河北工程大学科信学院',
                'city' => '邯郸市',
                'code' => '4113013578',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => '河北工业大学城市学院',
                'city' => '廊坊市',
                'code' => '4113013584',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => '燕山大学里仁学院',
                'city' => '秦皇岛市',
                'code' => '4113013592',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => '石家庄铁道大学四方学院',
                'city' => '石家庄市',
                'code' => '4113013593',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => '河北地质大学华信学院',
                'city' => '石家庄市',
                'code' => '4113013594',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => '河北农业大学现代科技学院',
                'city' => '保定市',
                'code' => '4113013595',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => '华北理工大学冀唐学院',
                'city' => '唐山市',
                'code' => '4113013596',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => '保定理工学院',
                'city' => '保定市',
                'code' => '4113013891',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => '燕京理工学院',
                'city' => '廊坊市',
                'code' => '4113013895',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => '北京中医药大学东方学院',
                'city' => '廊坊市',
                'code' => '4113013899',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => '北京交通大学海滨学院',
                'city' => '沧州市',
                'code' => '4113014202',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => '河北东方学院',
                'city' => '廊坊市',
                'code' => '4113014225',
                'supervisor' => '河北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => '河北中医学院',
                'city' => '石家庄市',
                'code' => '4113014432',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => '张家口学院',
                'city' => '张家口市',
                'code' => '4113014458',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => '河北环境工程学院',
                'city' => '秦皇岛市',
                'code' => '4213051721',
                'supervisor' => '河北省',
                'level' => '本科',
                'type' => '公办',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => '河北工业职业技术学院',
                'city' => '石家庄市',
                'code' => '4113010873',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => '邯郸职业技术学院',
                'city' => '邯郸市',
                'code' => '4113011034',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => '石家庄职业技术学院',
                'city' => '石家庄市',
                'code' => '4113011238',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => '张家口职业技术学院',
                'city' => '张家口市',
                'code' => '4113011423',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => '承德石油高等专科学校',
                'city' => '承德市',
                'code' => '4113011777',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => '邢台职业技术学院',
                'city' => '邢台市',
                'code' => '4113011821',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => '河北软件职业技术学院',
                'city' => '保定市',
                'code' => '4113012352',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => '河北石油职业技术学院',
                'city' => '廊坊市',
                'code' => '4113012367',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => '河北建材职业技术学院',
                'city' => '秦皇岛市',
                'code' => '4113012389',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => '河北政法职业学院',
                'city' => '石家庄市',
                'code' => '4113012408',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => '沧州职业技术学院',
                'city' => '沧州市',
                'code' => '4113012415',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => '河北能源职业技术学院',
                'city' => '唐山市',
                'code' => '4113012418',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => '石家庄铁路职业技术学院',
                'city' => '石家庄市',
                'code' => '4113012424',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => '保定职业技术学院',
                'city' => '保定市',
                'code' => '4113012543',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => '秦皇岛职业技术学院',
                'city' => '秦皇岛市',
                'code' => '4113012773',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => '石家庄工程职业学院',
                'city' => '石家庄市',
                'code' => '4113012782',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => '石家庄城市经济职业学院',
                'city' => '石家庄市',
                'code' => '4113012783',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => '唐山职业技术学院',
                'city' => '唐山市',
                'code' => '4113012785',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => '衡水职业技术学院',
                'city' => '衡水市',
                'code' => '4113012786',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => '唐山工业职业技术学院',
                'city' => '唐山市',
                'code' => '4113012787',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => '邢台医学高等专科学校',
                'city' => '邢台市',
                'code' => '4113012884',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => '河北艺术职业学院',
                'city' => '石家庄市',
                'code' => '4113012885',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => '河北旅游职业学院',
                'city' => '承德市',
                'code' => '4113012887',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => '石家庄财经职业学院',
                'city' => '石家庄市',
                'code' => '4113013070',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => '河北交通职业技术学院',
                'city' => '石家庄市',
                'code' => '4113013071',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => '河北化工医药职业技术学院',
                'city' => '石家庄市',
                'code' => '4113013072',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => '石家庄信息工程职业学院',
                'city' => '石家庄市',
                'code' => '4113013073',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => '河北对外经贸职业学院',
                'city' => '秦皇岛市',
                'code' => '4113013074',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => '保定电力职业技术学院',
                'city' => '保定市',
                'code' => '4113013392',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => '河北机电职业技术学院',
                'city' => '邢台市',
                'code' => '4113013393',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => '渤海石油职业学院',
                'city' => '沧州市',
                'code' => '4113013394',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => '廊坊职业技术学院',
                'city' => '廊坊市',
                'code' => '4113013395',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => '唐山科技职业技术学院',
                'city' => '唐山市',
                'code' => '4113013396',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => '石家庄邮电职业技术学院',
                'city' => '石家庄市',
                'code' => '4113013397',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => '河北公安警察职业学院',
                'city' => '石家庄市',
                'code' => '4113013398',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => '石家庄工商职业学院',
                'city' => '石家庄市',
                'code' => '4113013399',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => '石家庄理工职业学院',
                'city' => '石家庄市',
                'code' => '4113013400',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => '石家庄科技信息职业学院',
                'city' => '石家庄市',
                'code' => '4113013403',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => '河北司法警官职业学院',
                'city' => '邯郸市',
                'code' => '4113013690',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => '沧州医学高等专科学校',
                'city' => '沧州市',
                'code' => '4113013779',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => '河北女子职业技术学院',
                'city' => '石家庄市',
                'code' => '4113013822',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => '石家庄医学高等专科学校',
                'city' => '石家庄市',
                'code' => '4113014018',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => '石家庄经济职业学院',
                'city' => '石家庄市',
                'code' => '4113014047',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => '冀中职业学院',
                'city' => '保定市',
                'code' => '4113014103',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => '石家庄人民医学高等专科学校',
                'city' => '石家庄市',
                'code' => '4113014158',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => '石家庄科技工程职业学院',
                'city' => '石家庄市',
                'code' => '4113014185',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => '河北劳动关系职业学院',
                'city' => '石家庄市',
                'code' => '4113014208',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => '石家庄科技职业学院',
                'city' => '石家庄市',
                'code' => '4113014213',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => '泊头职业学院',
                'city' => '沧州市',
                'code' => '4113014259',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => '宣化科技职业学院',
                'city' => '张家口市',
                'code' => '4113014260',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => '廊坊燕京职业技术学院',
                'city' => '廊坊市',
                'code' => '4113014280',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => '承德护理职业学院',
                'city' => '承德市',
                'code' => '4113014281',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => '石家庄幼儿师范高等专科学校',
                'city' => '石家庄市',
                'code' => '4113014328',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => '廊坊卫生职业学院',
                'city' => '廊坊市',
                'code' => '4113014335',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => '河北轨道运输职业技术学院',
                'city' => '石家庄市',
                'code' => '4113014396',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => '保定幼儿师范高等专科学校',
                'city' => '保定市',
                'code' => '4113014460',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => '河北工艺美术职业学院',
                'city' => '保定市',
                'code' => '4113014471',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => '渤海理工职业学院',
                'city' => '沧州市',
                'code' => '4113014472',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => '唐山幼儿师范高等专科学校',
                'city' => '唐山市',
                'code' => '4113014586',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => '曹妃甸职业技术学院',
                'city' => '唐山市',
                'code' => '4113014601',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => '承德应用技术职业学院',
                'city' => '承德市',
                'code' => '4113014632',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => '邯郸幼儿师范高等专科学校',
                'city' => '邯郸市',
                'code' => '4113014686',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => '邯郸科技职业学院',
                'city' => '邯郸市',
                'code' => '4113014695',
                'supervisor' => '河北省',
                'level' => '专科',
                'type' => '公办',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => '唐山海运职业学院',
                'city' => '唐山市',
                'code' => '4113014696',
                'supervisor' => '河北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => '中国人民解放军陆军指挥学院',
                'city' => '石家庄市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => '中国人民解放军空军石家庄飞行学院',
                'city' => '石家庄市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => '中国人民武装警察部队士官学校',
                'city' => '石家庄市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => '山西大学',
                'city' => '太原市',
                'code' => '4114010108',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => '太原科技大学',
                'city' => '太原市',
                'code' => '4114010109',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => '中北大学',
                'city' => '太原市',
                'code' => '4114010110',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => '太原理工大学',
                'city' => '太原市',
                'code' => '4114010112',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => '山西农业大学',
                'city' => '晋中市',
                'code' => '4114010113',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => '山西医科大学',
                'city' => '太原市',
                'code' => '4114010114',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => '长治医学院',
                'city' => '长治市',
                'code' => '4114010117',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => '山西师范大学',
                'city' => '临汾市',
                'code' => '4114010118',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => '太原师范学院',
                'city' => '太原市',
                'code' => '4114010119',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => '山西大同大学',
                'city' => '大同市',
                'code' => '4114010120',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => '晋中学院',
                'city' => '晋中市',
                'code' => '4114010121',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => '长治学院',
                'city' => '长治市',
                'code' => '4114010122',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => '运城学院',
                'city' => '运城市',
                'code' => '4114010123',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => '忻州师范学院',
                'city' => '忻州市',
                'code' => '4114010124',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => '山西财经大学',
                'city' => '太原市',
                'code' => '4114010125',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => '山西中医药大学',
                'city' => '太原市',
                'code' => '4114010809',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => '吕梁学院',
                'city' => '吕梁市',
                'code' => '4114010812',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => '太原学院',
                'city' => '太原市',
                'code' => '4114011242',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => '山西警察学院',
                'city' => '太原市',
                'code' => '4114012111',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => '山西应用科技学院',
                'city' => '太原市',
                'code' => '4114012779',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => '山西大学商务学院',
                'city' => '太原市',
                'code' => '4114013533',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => '太原理工大学现代科技学院',
                'city' => '太原市',
                'code' => '4114013534',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => '山西农业大学信息学院',
                'city' => '晋中市',
                'code' => '4114013535',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => '山西师范大学现代文理学院',
                'city' => '临汾市',
                'code' => '4114013537',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => '中北大学信息商务学院',
                'city' => '太原市',
                'code' => '4114013538',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => '太原科技大学华科学院',
                'city' => '太原市',
                'code' => '4114013597',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => '山西医科大学晋祠学院',
                'city' => '太原市',
                'code' => '4114013598',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => '山西财经大学华商学院',
                'city' => '太原市',
                'code' => '4114013608',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => '山西工商学院',
                'city' => '太原市',
                'code' => '4114013691',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => '太原工业学院',
                'city' => '太原市',
                'code' => '4114014101',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => '运城职业技术大学',
                'city' => '运城市',
                'code' => '4114014226',
                'supervisor' => '山西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => '山西传媒学院',
                'city' => '太原市',
                'code' => '4114014434',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => '山西工程技术学院',
                'city' => '阳泉市',
                'code' => '4114014527',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => '山西能源学院',
                'city' => '晋中市',
                'code' => '4214051189',
                'supervisor' => '山西省',
                'level' => '本科',
                'type' => '公办',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => '山西省财政税务专科学校',
                'city' => '太原市',
                'code' => '4114011630',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => '长治职业技术学院',
                'city' => '长治市',
                'code' => '4114012388',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => '山西艺术职业学院',
                'city' => '太原市',
                'code' => '4114012704',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => '晋城职业技术学院',
                'city' => '晋城市',
                'code' => '4114012774',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => '山西建筑职业技术学院',
                'city' => '太原市',
                'code' => '4114012775',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => '山西药科职业学院',
                'city' => '太原市',
                'code' => '4114012776',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => '山西交通职业技术学院',
                'city' => '太原市',
                'code' => '4114012778',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => '大同煤炭职业技术学院',
                'city' => '大同市',
                'code' => '4114012780',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => '山西机电职业技术学院',
                'city' => '长治市',
                'code' => '4114012888',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => '山西戏剧职业学院',
                'city' => '太原市',
                'code' => '4114012889',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => '山西财贸职业技术学院',
                'city' => '太原市',
                'code' => '4114012890',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => '山西林业职业技术学院',
                'city' => '太原市',
                'code' => '4114012891',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => '山西水利职业技术学院',
                'city' => '运城市',
                'code' => '4114012892',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => '阳泉职业技术学院',
                'city' => '阳泉市',
                'code' => '4114012893',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => '临汾职业技术学院',
                'city' => '临汾市',
                'code' => '4114013171',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => '山西职业技术学院',
                'city' => '太原市',
                'code' => '4114013528',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => '山西金融职业学院',
                'city' => '太原市',
                'code' => '4114013530',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => '太原城市职业技术学院',
                'city' => '太原市',
                'code' => '4114013532',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => '山西信息职业技术学院',
                'city' => '临汾市',
                'code' => '4114013541',
                'supervisor' => '山西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => '山西体育职业学院',
                'city' => '太原市',
                'code' => '4114013692',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => '山西警官职业学院',
                'city' => '太原市',
                'code' => '4114013693',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => '山西国际商务职业学院',
                'city' => '太原市',
                'code' => '4114013694',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => '潞安职业技术学院',
                'city' => '长治市',
                'code' => '4114013695',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => '太原旅游职业学院',
                'city' => '太原市',
                'code' => '4114013696',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => '山西旅游职业学院',
                'city' => '太原市',
                'code' => '4114013697',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => '山西管理职业学院',
                'city' => '临汾市',
                'code' => '4114013698',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => '山西电力职业技术学院',
                'city' => '太原市',
                'code' => '4114013745',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => '忻州职业技术学院',
                'city' => '忻州市',
                'code' => '4114013821',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => '山西同文职业技术学院',
                'city' => '晋中市',
                'code' => '4114013862',
                'supervisor' => '山西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => '晋中职业技术学院',
                'city' => '晋中市',
                'code' => '4114013913',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => '山西华澳商贸职业学院',
                'city' => '晋中市',
                'code' => '4114013914',
                'supervisor' => '山西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => '山西运城农业职业技术学院',
                'city' => '运城市',
                'code' => '4114013934',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => '运城幼儿师范高等专科学校',
                'city' => '运城市',
                'code' => '4114014093',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => '山西老区职业技术学院',
                'city' => '太原市',
                'code' => '4114014105',
                'supervisor' => '山西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => '山西经贸职业学院',
                'city' => '太原市',
                'code' => '4114014177',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => '朔州职业技术学院',
                'city' => '朔州市',
                'code' => '4114014186',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => '山西铁道职业技术学院',
                'city' => '太原市',
                'code' => '4114014247',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => '晋中师范高等专科学校',
                'city' => '晋中市',
                'code' => '4114014270',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => '阳泉师范高等专科学校',
                'city' => '阳泉市',
                'code' => '4114014271',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => '山西青年职业学院',
                'city' => '太原市',
                'code' => '4114014336',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => '运城护理职业学院',
                'city' => '运城市',
                'code' => '4114014397',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => '运城师范高等专科学校',
                'city' => '运城市',
                'code' => '4114014461',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => '朔州师范高等专科学校',
                'city' => '朔州市',
                'code' => '4114014462',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => '吕梁职业技术学院',
                'city' => '吕梁市',
                'code' => '4114014500',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => '大同师范高等专科学校',
                'city' => '大同市',
                'code' => '4114014627',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => '太原幼儿师范高等专科学校',
                'city' => '太原市',
                'code' => '4114014628',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => '山西工程职业学院',
                'city' => '太原市',
                'code' => '4114014681',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => '长治幼儿师范高等专科学校',
                'city' => '长治市',
                'code' => '4114014687',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => '山西通用航空职业技术学院',
                'city' => '大同市',
                'code' => '4114014697',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => '朔州陶瓷职业技术学院',
                'city' => '朔州市',
                'code' => '4114014698',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => '山西卫生健康职业学院',
                'city' => '太原市',
                'code' => '4214050166',
                'supervisor' => '山西省',
                'level' => '专科',
                'type' => '公办',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => '中国人民解放军空军勤务学院',
                'city' => '太原市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => '内蒙古大学',
                'city' => '呼和浩特市',
                'code' => '4115010126',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => '内蒙古科技大学',
                'city' => '包头市',
                'code' => '4115010127',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => '内蒙古工业大学',
                'city' => '呼和浩特市',
                'code' => '4115010128',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => '内蒙古农业大学',
                'city' => '呼和浩特市',
                'code' => '4115010129',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => '内蒙古医科大学',
                'city' => '呼和浩特市',
                'code' => '4115010132',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => '内蒙古师范大学',
                'city' => '呼和浩特市',
                'code' => '4115010135',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => '内蒙古民族大学',
                'city' => '通辽市',
                'code' => '4115010136',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => '赤峰学院',
                'city' => '赤峰市',
                'code' => '4115010138',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => '内蒙古财经大学',
                'city' => '呼和浩特市',
                'code' => '4115010139',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => '呼伦贝尔学院',
                'city' => '呼伦贝尔市',
                'code' => '4115010819',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => '集宁师范学院',
                'city' => '乌兰察布市',
                'code' => '4115011427',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => '河套学院',
                'city' => '巴彦淖尔市',
                'code' => '4115011631',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => '呼和浩特民族学院',
                'city' => '呼和浩特市',
                'code' => '4115011709',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => '内蒙古大学创业学院',
                'city' => '呼和浩特市',
                'code' => '4115014199',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => '内蒙古鸿德文理学院',
                'city' => '呼和浩特市',
                'code' => '4115014205',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => '内蒙古艺术学院',
                'city' => '呼和浩特市',
                'code' => '4115014531',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => '鄂尔多斯应用技术学院',
                'city' => '鄂尔多斯市',
                'code' => '4115014532',
                'supervisor' => '内蒙古自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => '内蒙古建筑职业技术学院',
                'city' => '呼和浩特市',
                'code' => '4115010871',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => '内蒙古丰州职业学院',
                'city' => '呼和浩特市',
                'code' => '4115011429',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => '包头职业技术学院',
                'city' => '包头市',
                'code' => '4115012057',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => '兴安职业技术学院',
                'city' => '兴安盟',
                'code' => '4115012443',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => '呼和浩特职业学院',
                'city' => '呼和浩特市',
                'code' => '4115012670',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => '包头轻工职业技术学院',
                'city' => '包头市',
                'code' => '4115012671',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => '内蒙古电子信息职业技术学院',
                'city' => '呼和浩特市',
                'code' => '4115012673',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => '内蒙古机电职业技术学院',
                'city' => '呼和浩特市',
                'code' => '4115012674',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => '内蒙古化工职业学院',
                'city' => '呼和浩特市',
                'code' => '4115012675',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => '内蒙古商贸职业学院',
                'city' => '呼和浩特市',
                'code' => '4115012676',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => '锡林郭勒职业学院',
                'city' => '锡林郭勒盟',
                'code' => '4115012677',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => '内蒙古警察职业学院',
                'city' => '呼和浩特市',
                'code' => '4115012797',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => '内蒙古体育职业学院',
                'city' => '呼和浩特市',
                'code' => '4115012894',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => '乌兰察布职业学院',
                'city' => '乌兰察布市',
                'code' => '4115013699',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => '通辽职业学院',
                'city' => '通辽市',
                'code' => '4115013740',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => '科尔沁艺术职业学院',
                'city' => '通辽市',
                'code' => '4115013741',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => '内蒙古交通职业技术学院',
                'city' => '赤峰市',
                'code' => '4115013824',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => '包头钢铁职业技术学院',
                'city' => '包头市',
                'code' => '4115013864',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => '乌海职业技术学院',
                'city' => '乌海市',
                'code' => '4115013915',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => '内蒙古科技职业学院',
                'city' => '呼和浩特市',
                'code' => '4115014048',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => '内蒙古北方职业技术学院',
                'city' => '呼和浩特市',
                'code' => '4115014049',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => '赤峰职业技术学院',
                'city' => '赤峰市',
                'code' => '4115014050',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => '内蒙古经贸外语职业学院',
                'city' => '呼和浩特市',
                'code' => '4115014051',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => '包头铁道职业技术学院',
                'city' => '包头市',
                'code' => '4115014187',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => '乌兰察布医学高等专科学校',
                'city' => '乌兰察布市',
                'code' => '4115014219',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => '鄂尔多斯职业学院',
                'city' => '鄂尔多斯市',
                'code' => '4115014248',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => '内蒙古工业职业学院',
                'city' => '呼和浩特市',
                'code' => '4115014282',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => '呼伦贝尔职业技术学院',
                'city' => '呼伦贝尔市',
                'code' => '4115014283',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => '满洲里俄语职业学院',
                'city' => '呼伦贝尔市',
                'code' => '4115014285',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => '内蒙古能源职业学院',
                'city' => '呼和浩特市',
                'code' => '4115014337',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => '赤峰工业职业技术学院',
                'city' => '赤峰市',
                'code' => '4115014338',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => '阿拉善职业技术学院',
                'city' => '阿拉善盟',
                'code' => '4115014339',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => '内蒙古美术职业学院',
                'city' => '巴彦淖尔市',
                'code' => '4115014387',
                'supervisor' => '内蒙古自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => '内蒙古民族幼儿师范高等专科学校',
                'city' => '鄂尔多斯市',
                'code' => '4115014463',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => '鄂尔多斯生态环境职业学院',
                'city' => '鄂尔多斯市',
                'code' => '4115014501',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => '扎兰屯职业学院',
                'city' => '呼伦贝尔市',
                'code' => '4115014539',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => '赤峰应用技术职业学院',
                'city' => '赤峰市',
                'code' => '4115014699',
                'supervisor' => '内蒙古自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => '辽宁大学',
                'city' => '沈阳市',
                'code' => '4121010140',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => '大连理工大学',
                'city' => '大连市',
                'code' => '4121010141',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => '沈阳工业大学',
                'city' => '沈阳市',
                'code' => '4121010142',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => '沈阳航空航天大学',
                'city' => '沈阳市',
                'code' => '4121010143',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => '沈阳理工大学',
                'city' => '沈阳市',
                'code' => '4121010144',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => '东北大学',
                'city' => '沈阳市',
                'code' => '4121010145',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => '辽宁科技大学',
                'city' => '鞍山市',
                'code' => '4121010146',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => '辽宁工程技术大学',
                'city' => '阜新市',
                'code' => '4121010147',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => '辽宁石油化工大学',
                'city' => '抚顺市',
                'code' => '4121010148',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => '沈阳化工大学',
                'city' => '沈阳市',
                'code' => '4121010149',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => '大连交通大学',
                'city' => '大连市',
                'code' => '4121010150',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => '大连海事大学',
                'city' => '大连市',
                'code' => '4121010151',
                'supervisor' => '交通运输部',
                'level' => '本科',
                'type' => '公办',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => '大连工业大学',
                'city' => '大连市',
                'code' => '4121010152',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => '沈阳建筑大学',
                'city' => '沈阳市',
                'code' => '4121010153',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => '辽宁工业大学',
                'city' => '锦州市',
                'code' => '4121010154',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => '沈阳农业大学',
                'city' => '沈阳市',
                'code' => '4121010157',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => '大连海洋大学',
                'city' => '大连市',
                'code' => '4121010158',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => '中国医科大学',
                'city' => '沈阳市',
                'code' => '4121010159',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => '锦州医科大学',
                'city' => '锦州市',
                'code' => '4121010160',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => '大连医科大学',
                'city' => '大连市',
                'code' => '4121010161',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => '辽宁中医药大学',
                'city' => '沈阳市',
                'code' => '4121010162',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => '沈阳药科大学',
                'city' => '沈阳市',
                'code' => '4121010163',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => '沈阳医学院',
                'city' => '沈阳市',
                'code' => '4121010164',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => '辽宁师范大学',
                'city' => '大连市',
                'code' => '4121010165',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => '沈阳师范大学',
                'city' => '沈阳市',
                'code' => '4121010166',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => '渤海大学',
                'city' => '锦州市',
                'code' => '4121010167',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => '鞍山师范学院',
                'city' => '鞍山市',
                'code' => '4121010169',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => '大连外国语大学',
                'city' => '大连市',
                'code' => '4121010172',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => '东北财经大学',
                'city' => '大连市',
                'code' => '4121010173',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => '中国刑事警察学院',
                'city' => '沈阳市',
                'code' => '4121010175',
                'supervisor' => '公安部',
                'level' => '本科',
                'type' => '公办',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => '沈阳体育学院',
                'city' => '沈阳市',
                'code' => '4121010176',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => '沈阳音乐学院',
                'city' => '沈阳市',
                'code' => '4121010177',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => '鲁迅美术学院',
                'city' => '沈阳市',
                'code' => '4121010178',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => '辽宁对外经贸学院',
                'city' => '大连市',
                'code' => '4121010841',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => '沈阳大学',
                'city' => '沈阳市',
                'code' => '4121011035',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => '大连大学',
                'city' => '大连市',
                'code' => '4121011258',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => '辽宁科技学院',
                'city' => '本溪市',
                'code' => '4121011430',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => '辽宁警察学院',
                'city' => '大连市',
                'code' => '4121011432',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => '沈阳工程学院',
                'city' => '沈阳市',
                'code' => '4121011632',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => '辽东学院',
                'city' => '丹东市',
                'code' => '4121011779',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => '大连民族大学',
                'city' => '大连市',
                'code' => '4121012026',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => '辽宁理工职业大学',
                'city' => '锦州市',
                'code' => '4121012595',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => '大连理工大学城市学院',
                'city' => '大连市',
                'code' => '4121013198',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => '沈阳工业大学工程学院',
                'city' => '辽阳市',
                'code' => '4121013199',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => '沈阳航空航天大学北方科技学院',
                'city' => '沈阳市',
                'code' => '4121013200',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => '沈阳工学院',
                'city' => '抚顺市',
                'code' => '4121013201',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => '大连工业大学艺术与信息工程学院',
                'city' => '大连市',
                'code' => '4121013203',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => '大连科技学院',
                'city' => '大连市',
                'code' => '4121013207',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => '沈阳城市建设学院',
                'city' => '沈阳市',
                'code' => '4121013208',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => '中国医科大学临床医药学院',
                'city' => '沈阳市',
                'code' => '4121013211',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => '大连医科大学中山学院',
                'city' => '大连市',
                'code' => '4121013212',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => '锦州医科大学医疗学院',
                'city' => '锦州市',
                'code' => '4121013213',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => '辽宁师范大学海华学院',
                'city' => '沈阳市',
                'code' => '4121013215',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => '辽宁理工学院',
                'city' => '锦州市',
                'code' => '4121013217',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => '大连财经学院',
                'city' => '大连市',
                'code' => '4121013218',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => '沈阳城市学院',
                'city' => '沈阳市',
                'code' => '4121013220',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => '辽宁石油化工大学顺华能源学院',
                'city' => '抚顺市',
                'code' => '4121013583',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => '大连艺术学院',
                'city' => '大连市',
                'code' => '4121013599',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => '辽宁中医药大学杏林学院',
                'city' => '沈阳市',
                'code' => '4121013609',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => '辽宁何氏医学院',
                'city' => '沈阳市',
                'code' => '4121013610',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => '沈阳科技学院',
                'city' => '沈阳市',
                'code' => '4121013621',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => '大连东软信息学院',
                'city' => '大连市',
                'code' => '4121013631',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => '辽宁财贸学院',
                'city' => '葫芦岛市',
                'code' => '4121013900',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => '辽宁传媒学院',
                'city' => '沈阳市',
                'code' => '4121013957',
                'supervisor' => '辽宁省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => '营口理工学院',
                'city' => '营口市',
                'code' => '4121014435',
                'supervisor' => '辽宁省',
                'level' => '本科',
                'type' => '公办',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => '朝阳师范高等专科学校',
                'city' => '朝阳市',
                'code' => '4121010171',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => '抚顺师范高等专科学校',
                'city' => '抚顺市',
                'code' => '4121010179',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => '锦州师范高等专科学校',
                'city' => '锦州市',
                'code' => '4121010180',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => '营口职业技术学院',
                'city' => '营口市',
                'code' => '4121010181',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => '铁岭师范高等专科学校',
                'city' => '铁岭市',
                'code' => '4121010182',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => '大连职业技术学院',
                'city' => '大连市',
                'code' => '4121010845',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => '辽宁农业职业技术学院',
                'city' => '营口市',
                'code' => '4121010957',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => '抚顺职业技术学院',
                'city' => '抚顺市',
                'code' => '4121011037',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => '辽阳职业技术学院',
                'city' => '辽阳市',
                'code' => '4121011249',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => '阜新高等专科学校',
                'city' => '阜新市',
                'code' => '4121011250',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => '辽宁省交通高等专科学校',
                'city' => '沈阳市',
                'code' => '4121011500',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => '辽宁税务高等专科学校',
                'city' => '大连市',
                'code' => '4121011735',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => '盘锦职业技术学院',
                'city' => '盘锦市',
                'code' => '4121012063',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => '沈阳航空职业技术学院',
                'city' => '沈阳市',
                'code' => '4121012590',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            6 => 
            array (
                'id' => 507,
                'name' => '辽宁体育运动职业技术学院',
                'city' => '沈阳市',
                'code' => '4121012591',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => '辽宁职业学院',
                'city' => '铁岭市',
                'code' => '4121012592',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => '辽宁生态工程职业学院',
                'city' => '沈阳市',
                'code' => '4121012593',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => '沈阳职业技术学院',
                'city' => '沈阳市',
                'code' => '4121012594',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => '大连商务职业学院',
                'city' => '大连市',
                'code' => '4121012730',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => '辽宁金融职业学院',
                'city' => '沈阳市',
                'code' => '4121012895',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => '辽宁轨道交通职业学院',
                'city' => '沈阳市',
                'code' => '4121012896',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => '辽宁广告职业学院',
                'city' => '沈阳市',
                'code' => '4121012897',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => '辽宁机电职业技术学院',
                'city' => '丹东市',
                'code' => '4121012898',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => '辽宁经济职业技术学院',
                'city' => '沈阳市',
                'code' => '4121012899',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => '辽宁石化职业技术学院',
                'city' => '锦州市',
                'code' => '4121012900',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => '渤海船舶职业学院',
                'city' => '葫芦岛市',
                'code' => '4121012931',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => '大连软件职业学院',
                'city' => '大连市',
                'code' => '4121013958',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => '大连翻译职业学院',
                'city' => '大连市',
                'code' => '4121013959',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => '辽宁商贸职业学院',
                'city' => '沈阳市',
                'code' => '4121013960',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => '大连枫叶职业技术学院',
                'city' => '大连市',
                'code' => '4121013961',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => '辽宁装备制造职业技术学院',
                'city' => '沈阳市',
                'code' => '4121014076',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => '辽河石油职业技术学院',
                'city' => '盘锦市',
                'code' => '4121014077',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => '辽宁地质工程职业学院',
                'city' => '丹东市',
                'code' => '4121014106',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => '辽宁铁道职业技术学院',
                'city' => '锦州市',
                'code' => '4121014188',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => '辽宁建筑职业学院',
                'city' => '辽阳市',
                'code' => '4121014189',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            27 => 
            array (
                'id' => 528,
                'name' => '大连航运职业技术学院',
                'city' => '大连市',
                'code' => '4121014209',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => '大连装备制造职业技术学院',
                'city' => '大连市',
                'code' => '4121014227',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => '大连汽车职业技术学院',
                'city' => '大连市',
                'code' => '4121014228',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => '辽宁现代服务职业技术学院',
                'city' => '沈阳市',
                'code' => '4121014240',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => '辽宁冶金职业技术学院',
                'city' => '本溪市',
                'code' => '4121014286',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => '辽宁工程职业学院',
                'city' => '铁岭市',
                'code' => '4121014287',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            33 => 
            array (
                'id' => 534,
                'name' => '辽宁城市建设职业技术学院',
                'city' => '沈阳市',
                'code' => '4121014288',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => '辽宁医药职业学院',
                'city' => '沈阳市',
                'code' => '4121014289',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            35 => 
            array (
                'id' => 536,
                'name' => '铁岭卫生职业学院',
                'city' => '铁岭市',
                'code' => '4121014290',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => '沈阳北软信息职业技术学院',
                'city' => '沈阳市',
                'code' => '4121014385',
                'supervisor' => '辽宁省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => '辽宁政法职业学院',
                'city' => '沈阳市',
                'code' => '4121014398',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => '辽宁民族师范高等专科学校',
                'city' => '沈阳市',
                'code' => '4121014464',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => '辽宁轻工职业学院',
                'city' => '大连市',
                'code' => '4121014473',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => '辽宁特殊教育师范高等专科学校',
                'city' => '沈阳市',
                'code' => '4121014526',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => '辽宁师范高等专科学校',
                'city' => '沈阳市',
                'code' => '4121014662',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => '鞍山职业技术学院',
                'city' => '鞍山市',
                'code' => '4121014700',
                'supervisor' => '辽宁省',
                'level' => '专科',
                'type' => '公办',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => '中国人民解放军海军大连舰艇学院',
                'city' => '大连市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => '中国人民解放军空军通信士官学校',
                'city' => '大连市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => '吉林大学',
                'city' => '长春市',
                'code' => '4122010183',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => '延边大学',
                'city' => '延边朝鲜族自治州',
                'code' => '4122010184',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => '长春理工大学',
                'city' => '长春市',
                'code' => '4122010186',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => '东北电力大学',
                'city' => '吉林市',
                'code' => '4122010188',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => '长春工业大学',
                'city' => '长春市',
                'code' => '4122010190',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => '吉林建筑大学',
                'city' => '长春市',
                'code' => '4122010191',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => '吉林化工学院',
                'city' => '吉林市',
                'code' => '4122010192',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => '吉林农业大学',
                'city' => '长春市',
                'code' => '4122010193',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => '长春中医药大学',
                'city' => '长春市',
                'code' => '4122010199',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            54 => 
            array (
                'id' => 555,
                'name' => '东北师范大学',
                'city' => '长春市',
                'code' => '4122010200',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => '北华大学',
                'city' => '吉林市',
                'code' => '4122010201',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => '通化师范学院',
                'city' => '通化市',
                'code' => '4122010202',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => '吉林师范大学',
                'city' => '四平市',
                'code' => '4122010203',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => '吉林工程技术师范学院',
                'city' => '长春市',
                'code' => '4122010204',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => '长春师范大学',
                'city' => '长春市',
                'code' => '4122010205',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => '白城师范学院',
                'city' => '白城市',
                'code' => '4122010206',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => '吉林财经大学',
                'city' => '长春市',
                'code' => '4122010207',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => '吉林体育学院',
                'city' => '长春市',
                'code' => '4122010208',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => '吉林艺术学院',
                'city' => '长春市',
                'code' => '4122010209',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => '吉林外国语大学',
                'city' => '长春市',
                'code' => '4122010964',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => '吉林工商学院',
                'city' => '长春市',
                'code' => '4122011261',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => '长春工程学院',
                'city' => '长春市',
                'code' => '4122011437',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => '吉林农业科技学院',
                'city' => '吉林市',
                'code' => '4122011439',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => '吉林警察学院',
                'city' => '长春市',
                'code' => '4122011441',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => '长春大学',
                'city' => '长春市',
                'code' => '4122011726',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => '长春光华学院',
                'city' => '长春市',
                'code' => '4122013600',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => '长春工业大学人文信息学院',
                'city' => '长春市',
                'code' => '4122013601',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => '长春理工大学光电信息学院',
                'city' => '长春市',
                'code' => '4122013602',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => '长春财经学院',
                'city' => '长春市',
                'code' => '4122013603',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => '吉林建筑科技学院',
                'city' => '长春市',
                'code' => '4122013604',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => '长春建筑学院',
                'city' => '长春市',
                'code' => '4122013605',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => '长春科技学院',
                'city' => '长春市',
                'code' => '4122013606',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => '吉林动画学院',
                'city' => '长春市',
                'code' => '4122013607',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => '吉林师范大学博达学院',
                'city' => '四平市',
                'code' => '4122013622',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            79 => 
            array (
                'id' => 580,
                'name' => '长春大学旅游学院',
                'city' => '长春市',
                'code' => '4122013623',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            80 => 
            array (
                'id' => 581,
                'name' => '东北师范大学人文学院',
                'city' => '长春市',
                'code' => '4122013662',
                'supervisor' => '吉林省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            81 => 
            array (
                'id' => 582,
                'name' => '吉林医药学院',
                'city' => '吉林市',
                'code' => '4122013706',
                'supervisor' => '吉林省',
                'level' => '本科',
                'type' => '公办',
            ),
            82 => 
            array (
                'id' => 583,
                'name' => '长春师范高等专科学校',
                'city' => '长春市',
                'code' => '3622000335',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            83 => 
            array (
                'id' => 584,
                'name' => '辽源职业技术学院',
                'city' => '辽源市',
                'code' => '4122010847',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            84 => 
            array (
                'id' => 585,
                'name' => '四平职业大学',
                'city' => '四平市',
                'code' => '4122011044',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            85 => 
            array (
                'id' => 586,
                'name' => '长春汽车工业高等专科学校',
                'city' => '长春市',
                'code' => '4122011436',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            86 => 
            array (
                'id' => 587,
                'name' => '长春金融高等专科学校',
                'city' => '长春市',
                'code' => '4122011440',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            87 => 
            array (
                'id' => 588,
                'name' => '长春医学高等专科学校',
                'city' => '长春市',
                'code' => '4122011823',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            88 => 
            array (
                'id' => 589,
                'name' => '吉林交通职业技术学院',
                'city' => '长春市',
                'code' => '4122012049',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            89 => 
            array (
                'id' => 590,
                'name' => '长春东方职业学院',
                'city' => '长春市',
                'code' => '4122012306',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            90 => 
            array (
                'id' => 591,
                'name' => '吉林司法警官职业学院',
                'city' => '长春市',
                'code' => '4122012901',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            91 => 
            array (
                'id' => 592,
                'name' => '吉林电子信息职业技术学院',
                'city' => '吉林市',
                'code' => '4122012902',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            92 => 
            array (
                'id' => 593,
                'name' => '吉林工业职业技术学院',
                'city' => '吉林市',
                'code' => '4122012903',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            93 => 
            array (
                'id' => 594,
                'name' => '吉林工程职业学院',
                'city' => '四平市',
                'code' => '4122012904',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            94 => 
            array (
                'id' => 595,
                'name' => '长春职业技术学院',
                'city' => '长春市',
                'code' => '4122013161',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            95 => 
            array (
                'id' => 596,
                'name' => '白城医学高等专科学校',
                'city' => '白城市',
                'code' => '4122013743',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            96 => 
            array (
                'id' => 597,
                'name' => '长春信息技术职业学院',
                'city' => '长春市',
                'code' => '4122013916',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            97 => 
            array (
                'id' => 598,
                'name' => '松原职业技术学院',
                'city' => '松原市',
                'code' => '4122013917',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            98 => 
            array (
                'id' => 599,
                'name' => '吉林铁道职业技术学院',
                'city' => '吉林市',
                'code' => '4122014052',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            99 => 
            array (
                'id' => 600,
                'name' => '白城职业技术学院',
                'city' => '白城市',
                'code' => '4122014107',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            100 => 
            array (
                'id' => 601,
                'name' => '长白山职业技术学院',
                'city' => '白山市',
                'code' => '4122014190',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            101 => 
            array (
                'id' => 602,
                'name' => '吉林科技职业技术学院',
                'city' => '长春市',
                'code' => '4122014291',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            102 => 
            array (
                'id' => 603,
                'name' => '延边职业技术学院',
                'city' => '延边朝鲜族自治州',
                'code' => '4122014340',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            103 => 
            array (
                'id' => 604,
                'name' => '吉林城市职业技术学院',
                'city' => '长春市',
                'code' => '4122014426',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            104 => 
            array (
                'id' => 605,
                'name' => '吉林职业技术学院',
                'city' => '延边朝鲜族自治州',
                'code' => '4122014567',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            105 => 
            array (
                'id' => 606,
                'name' => '吉林水利电力职业学院',
                'city' => '长春市',
                'code' => '4122014602',
                'supervisor' => '吉林省',
                'level' => '专科',
                'type' => '公办',
            ),
            106 => 
            array (
                'id' => 607,
                'name' => '长春健康职业学院',
                'city' => '长春市',
                'code' => '4122014603',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            107 => 
            array (
                'id' => 608,
                'name' => '长春早期教育职业学院',
                'city' => '长春市',
                'code' => '4122014701',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            108 => 
            array (
                'id' => 609,
                'name' => '梅河口康美职业技术学院',
                'city' => '梅河口市',
                'code' => '4122014702',
                'supervisor' => '吉林省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            109 => 
            array (
                'id' => 610,
                'name' => '中国人民解放军空军航空大学',
                'city' => '长春市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => '黑龙江大学',
                'city' => '哈尔滨市',
                'code' => '4123010212',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            111 => 
            array (
                'id' => 612,
                'name' => '哈尔滨工业大学',
                'city' => '哈尔滨市',
                'code' => '4123010213',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            112 => 
            array (
                'id' => 613,
                'name' => '哈尔滨理工大学',
                'city' => '哈尔滨市',
                'code' => '4123010214',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            113 => 
            array (
                'id' => 614,
                'name' => '哈尔滨工程大学',
                'city' => '哈尔滨市',
                'code' => '4123010217',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            114 => 
            array (
                'id' => 615,
                'name' => '黑龙江科技大学',
                'city' => '哈尔滨市',
                'code' => '4123010219',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            115 => 
            array (
                'id' => 616,
                'name' => '东北石油大学',
                'city' => '大庆市',
                'code' => '4123010220',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            116 => 
            array (
                'id' => 617,
                'name' => '佳木斯大学',
                'city' => '佳木斯市',
                'code' => '4123010222',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 618,
                'name' => '黑龙江八一农垦大学',
                'city' => '大庆市',
                'code' => '4123010223',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            118 => 
            array (
                'id' => 619,
                'name' => '东北农业大学',
                'city' => '哈尔滨市',
                'code' => '4123010224',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            119 => 
            array (
                'id' => 620,
                'name' => '东北林业大学',
                'city' => '哈尔滨市',
                'code' => '4123010225',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            120 => 
            array (
                'id' => 621,
                'name' => '哈尔滨医科大学',
                'city' => '哈尔滨市',
                'code' => '4123010226',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            121 => 
            array (
                'id' => 622,
                'name' => '黑龙江中医药大学',
                'city' => '哈尔滨市',
                'code' => '4123010228',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            122 => 
            array (
                'id' => 623,
                'name' => '牡丹江医学院',
                'city' => '牡丹江市',
                'code' => '4123010229',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            123 => 
            array (
                'id' => 624,
                'name' => '哈尔滨师范大学',
                'city' => '哈尔滨市',
                'code' => '4123010231',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            124 => 
            array (
                'id' => 625,
                'name' => '齐齐哈尔大学',
                'city' => '齐齐哈尔市',
                'code' => '4123010232',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            125 => 
            array (
                'id' => 626,
                'name' => '牡丹江师范学院',
                'city' => '牡丹江市',
                'code' => '4123010233',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            126 => 
            array (
                'id' => 627,
                'name' => '哈尔滨学院',
                'city' => '哈尔滨市',
                'code' => '4123010234',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            127 => 
            array (
                'id' => 628,
                'name' => '大庆师范学院',
                'city' => '大庆市',
                'code' => '4123010235',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            128 => 
            array (
                'id' => 629,
                'name' => '绥化学院',
                'city' => '绥化市',
                'code' => '4123010236',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            129 => 
            array (
                'id' => 630,
                'name' => '哈尔滨商业大学',
                'city' => '哈尔滨市',
                'code' => '4123010240',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            130 => 
            array (
                'id' => 631,
                'name' => '哈尔滨体育学院',
                'city' => '哈尔滨市',
                'code' => '4123010242',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            131 => 
            array (
                'id' => 632,
                'name' => '哈尔滨金融学院',
                'city' => '哈尔滨市',
                'code' => '4123010245',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            132 => 
            array (
                'id' => 633,
                'name' => '齐齐哈尔医学院',
                'city' => '齐齐哈尔市',
                'code' => '4123011230',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            133 => 
            array (
                'id' => 634,
                'name' => '黑龙江工业学院',
                'city' => '鸡西市',
                'code' => '4123011445',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            134 => 
            array (
                'id' => 635,
                'name' => '黑龙江东方学院',
                'city' => '哈尔滨市',
                'code' => '4123011446',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            135 => 
            array (
                'id' => 636,
                'name' => '哈尔滨信息工程学院',
                'city' => '哈尔滨市',
                'code' => '4123011635',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            136 => 
            array (
                'id' => 637,
                'name' => '黑龙江工程学院',
                'city' => '哈尔滨市',
                'code' => '4123011802',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            137 => 
            array (
                'id' => 638,
                'name' => '齐齐哈尔工程学院',
                'city' => '齐齐哈尔市',
                'code' => '4123012729',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            138 => 
            array (
                'id' => 639,
                'name' => '黑龙江外国语学院',
                'city' => '哈尔滨市',
                'code' => '4123013296',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            139 => 
            array (
                'id' => 640,
                'name' => '黑龙江财经学院',
                'city' => '哈尔滨市',
                'code' => '4123013298',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            140 => 
            array (
                'id' => 641,
                'name' => '哈尔滨石油学院',
                'city' => '哈尔滨市',
                'code' => '4123013299',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            141 => 
            array (
                'id' => 642,
                'name' => '黑龙江工商学院',
                'city' => '哈尔滨市',
                'code' => '4123013300',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            142 => 
            array (
                'id' => 643,
                'name' => '哈尔滨远东理工学院',
                'city' => '哈尔滨市',
                'code' => '4123013301',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            143 => 
            array (
                'id' => 644,
                'name' => '哈尔滨剑桥学院',
                'city' => '哈尔滨市',
                'code' => '4123013303',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            144 => 
            array (
                'id' => 645,
                'name' => '黑龙江工程学院昆仑旅游学院',
                'city' => '哈尔滨市',
                'code' => '4123013304',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            145 => 
            array (
                'id' => 646,
                'name' => '哈尔滨广厦学院',
                'city' => '哈尔滨市',
                'code' => '4123013306',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            146 => 
            array (
                'id' => 647,
                'name' => '哈尔滨华德学院',
                'city' => '哈尔滨市',
                'code' => '4123013307',
                'supervisor' => '黑龙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            147 => 
            array (
                'id' => 648,
                'name' => '黑河学院',
                'city' => '黑河市',
                'code' => '4123013744',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            148 => 
            array (
                'id' => 649,
                'name' => '哈尔滨音乐学院',
                'city' => '哈尔滨市',
                'code' => '4123014560',
                'supervisor' => '黑龙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 650,
                'name' => '齐齐哈尔高等师范专科学校',
                'city' => '齐齐哈尔市',
                'code' => '4123010238',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 651,
                'name' => '伊春职业学院',
                'city' => '伊春市',
                'code' => '4123010872',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            151 => 
            array (
                'id' => 652,
                'name' => '牡丹江大学',
                'city' => '牡丹江市',
                'code' => '4123011046',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            152 => 
            array (
                'id' => 653,
                'name' => '黑龙江职业学院',
                'city' => '哈尔滨市',
                'code' => '4123011449',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            153 => 
            array (
                'id' => 654,
                'name' => '黑龙江建筑职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123012053',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            154 => 
            array (
                'id' => 655,
                'name' => '黑龙江艺术职业学院',
                'city' => '哈尔滨市',
                'code' => '4123012490',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            155 => 
            array (
                'id' => 656,
                'name' => '大庆职业学院',
                'city' => '大庆市',
                'code' => '4123012718',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            156 => 
            array (
                'id' => 657,
                'name' => '黑龙江林业职业技术学院',
                'city' => '牡丹江市',
                'code' => '4123012724',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            157 => 
            array (
                'id' => 658,
                'name' => '黑龙江农业职业技术学院',
                'city' => '佳木斯市',
                'code' => '4123012725',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            158 => 
            array (
                'id' => 659,
                'name' => '黑龙江农业工程职业学院',
                'city' => '哈尔滨市',
                'code' => '4123012726',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            159 => 
            array (
                'id' => 660,
                'name' => '黑龙江农垦职业学院',
                'city' => '哈尔滨市',
                'code' => '4123012727',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 661,
                'name' => '黑龙江司法警官职业学院',
                'city' => '哈尔滨市',
                'code' => '4123012728',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            161 => 
            array (
                'id' => 662,
                'name' => '鹤岗师范高等专科学校',
                'city' => '鹤岗市',
                'code' => '4123012905',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 663,
                'name' => '哈尔滨电力职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123012906',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            163 => 
            array (
                'id' => 664,
                'name' => '哈尔滨铁道职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123012907',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            164 => 
            array (
                'id' => 665,
                'name' => '大兴安岭职业学院',
                'city' => '大兴安岭地区',
                'code' => '4123012908',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            165 => 
            array (
                'id' => 666,
                'name' => '黑龙江农业经济职业学院',
                'city' => '牡丹江市',
                'code' => '4123012910',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            166 => 
            array (
                'id' => 667,
                'name' => '哈尔滨职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123012911',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            167 => 
            array (
                'id' => 668,
                'name' => '哈尔滨传媒职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013302',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            168 => 
            array (
                'id' => 669,
                'name' => '黑龙江生物科技职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013447',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 670,
                'name' => '黑龙江商业职业学院',
                'city' => '牡丹江市',
                'code' => '4123013448',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 671,
                'name' => '黑龙江公安警官职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013449',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            171 => 
            array (
                'id' => 672,
                'name' => '哈尔滨城市职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013451',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            172 => 
            array (
                'id' => 673,
                'name' => '黑龙江农垦科技职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013453',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            173 => 
            array (
                'id' => 674,
                'name' => '黑龙江旅游职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123013729',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            174 => 
            array (
                'id' => 675,
                'name' => '黑龙江三江美术职业学院',
                'city' => '佳木斯市',
                'code' => '4123013730',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            175 => 
            array (
                'id' => 676,
                'name' => '黑龙江生态工程职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013731',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            176 => 
            array (
                'id' => 677,
                'name' => '黑龙江能源职业学院',
                'city' => '双鸭山市',
                'code' => '4123013732',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            177 => 
            array (
                'id' => 678,
                'name' => '七台河职业学院',
                'city' => '七台河市',
                'code' => '4123013918',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 679,
                'name' => '黑龙江民族职业学院',
                'city' => '哈尔滨市',
                'code' => '4123013935',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            179 => 
            array (
                'id' => 680,
                'name' => '大庆医学高等专科学校',
                'city' => '大庆市',
                'code' => '4123014017',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            180 => 
            array (
                'id' => 681,
                'name' => '黑龙江交通职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123014053',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            181 => 
            array (
                'id' => 682,
                'name' => '哈尔滨应用职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123014055',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            182 => 
            array (
                'id' => 683,
                'name' => '黑龙江幼儿师范高等专科学校',
                'city' => '牡丹江市',
                'code' => '4123014095',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            183 => 
            array (
                'id' => 684,
                'name' => '哈尔滨科学技术职业学院',
                'city' => '哈尔滨市',
                'code' => '4123014108',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            184 => 
            array (
                'id' => 685,
                'name' => '佳木斯职业学院',
                'city' => '佳木斯市',
                'code' => '4123014178',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            185 => 
            array (
                'id' => 686,
                'name' => '黑龙江护理高等专科学校',
                'city' => '哈尔滨市',
                'code' => '4123014272',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            186 => 
            array (
                'id' => 687,
                'name' => '齐齐哈尔理工职业学院',
                'city' => '齐齐哈尔市',
                'code' => '4123014400',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            187 => 
            array (
                'id' => 688,
                'name' => '哈尔滨幼儿师范高等专科学校',
                'city' => '哈尔滨市',
                'code' => '4123014425',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            188 => 
            array (
                'id' => 689,
                'name' => '黑龙江冰雪体育职业学院',
                'city' => '哈尔滨市',
                'code' => '4123014540',
                'supervisor' => '黑龙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            189 => 
            array (
                'id' => 690,
                'name' => '哈尔滨北方航空职业技术学院',
                'city' => '哈尔滨市',
                'code' => '4123014633',
                'supervisor' => '黑龙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            190 => 
            array (
                'id' => 691,
                'name' => '中国人民解放军空军哈尔滨飞行学院',
                'city' => '哈尔滨市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => '复旦大学',
                'city' => '上海市',
                'code' => '4131010246',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            192 => 
            array (
                'id' => 693,
                'name' => '同济大学',
                'city' => '上海市',
                'code' => '4131010247',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            193 => 
            array (
                'id' => 694,
                'name' => '上海交通大学',
                'city' => '上海市',
                'code' => '4131010248',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            194 => 
            array (
                'id' => 695,
                'name' => '华东理工大学',
                'city' => '上海市',
                'code' => '4131010251',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            195 => 
            array (
                'id' => 696,
                'name' => '上海理工大学',
                'city' => '上海市',
                'code' => '4131010252',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            196 => 
            array (
                'id' => 697,
                'name' => '上海海事大学',
                'city' => '上海市',
                'code' => '4131010254',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            197 => 
            array (
                'id' => 698,
                'name' => '东华大学',
                'city' => '上海市',
                'code' => '4131010255',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            198 => 
            array (
                'id' => 699,
                'name' => '上海电力大学',
                'city' => '上海市',
                'code' => '4131010256',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            199 => 
            array (
                'id' => 700,
                'name' => '上海应用技术大学',
                'city' => '上海市',
                'code' => '4131010259',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            200 => 
            array (
                'id' => 701,
                'name' => '上海健康医学院',
                'city' => '上海市',
                'code' => '4131010262',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            201 => 
            array (
                'id' => 702,
                'name' => '上海海洋大学',
                'city' => '上海市',
                'code' => '4131010264',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            202 => 
            array (
                'id' => 703,
                'name' => '上海中医药大学',
                'city' => '上海市',
                'code' => '4131010268',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            203 => 
            array (
                'id' => 704,
                'name' => '华东师范大学',
                'city' => '上海市',
                'code' => '4131010269',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            204 => 
            array (
                'id' => 705,
                'name' => '上海师范大学',
                'city' => '上海市',
                'code' => '4131010270',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            205 => 
            array (
                'id' => 706,
                'name' => '上海外国语大学',
                'city' => '上海市',
                'code' => '4131010271',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            206 => 
            array (
                'id' => 707,
                'name' => '上海财经大学',
                'city' => '上海市',
                'code' => '4131010272',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            207 => 
            array (
                'id' => 708,
                'name' => '上海对外经贸大学',
                'city' => '上海市',
                'code' => '4131010273',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            208 => 
            array (
                'id' => 709,
                'name' => '上海海关学院',
                'city' => '上海市',
                'code' => '4131010274',
                'supervisor' => '海关总署',
                'level' => '本科',
                'type' => '公办',
            ),
            209 => 
            array (
                'id' => 710,
                'name' => '华东政法大学',
                'city' => '上海市',
                'code' => '4131010276',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            210 => 
            array (
                'id' => 711,
                'name' => '上海体育学院',
                'city' => '上海市',
                'code' => '4131010277',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            211 => 
            array (
                'id' => 712,
                'name' => '上海音乐学院',
                'city' => '上海市',
                'code' => '4131010278',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            212 => 
            array (
                'id' => 713,
                'name' => '上海戏剧学院',
                'city' => '上海市',
                'code' => '4131010279',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            213 => 
            array (
                'id' => 714,
                'name' => '上海大学',
                'city' => '上海市',
                'code' => '4131010280',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            214 => 
            array (
                'id' => 715,
                'name' => '上海公安学院',
                'city' => '上海市',
                'code' => '4131010283',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            215 => 
            array (
                'id' => 716,
                'name' => '上海工程技术大学',
                'city' => '上海市',
                'code' => '4131010856',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            216 => 
            array (
                'id' => 717,
                'name' => '上海立信会计金融学院',
                'city' => '上海市',
                'code' => '4131011047',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            217 => 
            array (
                'id' => 718,
                'name' => '上海电机学院',
                'city' => '上海市',
                'code' => '4131011458',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            218 => 
            array (
                'id' => 719,
                'name' => '上海杉达学院',
                'city' => '上海市',
                'code' => '4131011833',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            219 => 
            array (
                'id' => 720,
                'name' => '上海政法学院',
                'city' => '上海市',
                'code' => '4131011835',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            220 => 
            array (
                'id' => 721,
                'name' => '上海第二工业大学',
                'city' => '上海市',
                'code' => '4131012044',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            221 => 
            array (
                'id' => 722,
                'name' => '上海商学院',
                'city' => '上海市',
                'code' => '4131012050',
                'supervisor' => '上海市',
                'level' => '本科',
                'type' => '公办',
            ),
            222 => 
            array (
                'id' => 723,
                'name' => '上海立达学院',
                'city' => '上海市',
                'code' => '4131012587',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            223 => 
            array (
                'id' => 724,
                'name' => '上海建桥学院',
                'city' => '上海市',
                'code' => '4131012799',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            224 => 
            array (
                'id' => 725,
                'name' => '上海兴伟学院',
                'city' => '上海市',
                'code' => '4131012914',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            225 => 
            array (
                'id' => 726,
                'name' => '上海中侨职业技术大学',
                'city' => '上海市',
                'code' => '4131012915',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            226 => 
            array (
                'id' => 727,
                'name' => '上海视觉艺术学院',
                'city' => '上海市',
                'code' => '4131013632',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            227 => 
            array (
                'id' => 728,
                'name' => '上海外国语大学贤达经济人文学院',
                'city' => '上海市',
                'code' => '4131013636',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            228 => 
            array (
                'id' => 729,
                'name' => '上海师范大学天华学院',
                'city' => '上海市',
                'code' => '4131013893',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            229 => 
            array (
                'id' => 730,
                'name' => '上海科技大学',
                'city' => '上海市',
                'code' => '4131014423',
                'supervisor' => '上海市 中国科学院',
                'level' => '本科',
                'type' => '公办',
            ),
            230 => 
            array (
                'id' => 731,
                'name' => '上海纽约大学',
                'city' => '上海市',
                'code' => '4131016404',
                'supervisor' => '上海市教委',
                'level' => '本科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 732,
                'name' => '上海旅游高等专科学校',
                'city' => '上海市',
                'code' => '4131010275',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 733,
                'name' => '上海东海职业技术学院',
                'city' => '上海市',
                'code' => '4131010851',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            233 => 
            array (
                'id' => 734,
                'name' => '上海工商职业技术学院',
                'city' => '上海市',
                'code' => '4131010852',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            234 => 
            array (
                'id' => 735,
                'name' => '上海出版印刷高等专科学校',
                'city' => '上海市',
                'code' => '4131011733',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            235 => 
            array (
                'id' => 736,
                'name' => '上海行健职业学院',
                'city' => '上海市',
                'code' => '4131012493',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            236 => 
            array (
                'id' => 737,
                'name' => '上海城建职业学院',
                'city' => '上海市',
                'code' => '4131012495',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            237 => 
            array (
                'id' => 738,
                'name' => '上海交通职业技术学院',
                'city' => '上海市',
                'code' => '4131012497',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            238 => 
            array (
                'id' => 739,
                'name' => '上海海事职业技术学院',
                'city' => '上海市',
                'code' => '4131012498',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            239 => 
            array (
                'id' => 740,
                'name' => '上海电子信息职业技术学院',
                'city' => '上海市',
                'code' => '4131012499',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            240 => 
            array (
                'id' => 741,
                'name' => '上海震旦职业学院',
                'city' => '上海市',
                'code' => '4131012583',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            241 => 
            array (
                'id' => 742,
                'name' => '上海民远职业技术学院',
                'city' => '上海市',
                'code' => '4131012584',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            242 => 
            array (
                'id' => 743,
                'name' => '上海欧华职业技术学院',
                'city' => '上海市',
                'code' => '4131012585',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            243 => 
            array (
                'id' => 744,
                'name' => '上海思博职业技术学院',
                'city' => '上海市',
                'code' => '4131012586',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            244 => 
            array (
                'id' => 745,
                'name' => '上海工艺美术职业学院',
                'city' => '上海市',
                'code' => '4131012588',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            245 => 
            array (
                'id' => 746,
                'name' => '上海济光职业技术学院',
                'city' => '上海市',
                'code' => '4131012798',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            246 => 
            array (
                'id' => 747,
                'name' => '上海工商外国语职业学院',
                'city' => '上海市',
                'code' => '4131012800',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            247 => 
            array (
                'id' => 748,
                'name' => '上海科学技术职业学院',
                'city' => '上海市',
                'code' => '4131012801',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 749,
                'name' => '上海农林职业技术学院',
                'city' => '上海市',
                'code' => '4131012912',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 750,
                'name' => '上海邦德职业技术学院',
                'city' => '上海市',
                'code' => '4131012913',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            250 => 
            array (
                'id' => 751,
                'name' => '上海电影艺术职业学院',
                'city' => '上海市',
                'code' => '4131013747',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            251 => 
            array (
                'id' => 752,
                'name' => '上海中华职业技术学院',
                'city' => '上海市',
                'code' => '4131013907',
                'supervisor' => '上海市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            252 => 
            array (
                'id' => 753,
                'name' => '上海工会管理职业学院',
                'city' => '上海市',
                'code' => '4131014023',
                'supervisor' => '上海市',
                'level' => '专科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 754,
                'name' => '上海民航职业技术学院',
                'city' => '上海市',
                'code' => '4131014394',
                'supervisor' => '交通运输部（中国民用航空局）',
                'level' => '专科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 755,
                'name' => '中国人民解放军海军军医大学',
                'city' => '上海市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => '南京大学',
                'city' => '南京市',
                'code' => '4132010284',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            256 => 
            array (
                'id' => 757,
                'name' => '苏州大学',
                'city' => '苏州市',
                'code' => '4132010285',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            257 => 
            array (
                'id' => 758,
                'name' => '东南大学',
                'city' => '南京市',
                'code' => '4132010286',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            258 => 
            array (
                'id' => 759,
                'name' => '南京航空航天大学',
                'city' => '南京市',
                'code' => '4132010287',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            259 => 
            array (
                'id' => 760,
                'name' => '南京理工大学',
                'city' => '南京市',
                'code' => '4132010288',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            260 => 
            array (
                'id' => 761,
                'name' => '江苏科技大学',
                'city' => '镇江市',
                'code' => '4132010289',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            261 => 
            array (
                'id' => 762,
                'name' => '中国矿业大学',
                'city' => '徐州市',
                'code' => '4132010290',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            262 => 
            array (
                'id' => 763,
                'name' => '南京工业大学',
                'city' => '南京市',
                'code' => '4132010291',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            263 => 
            array (
                'id' => 764,
                'name' => '常州大学',
                'city' => '常州市',
                'code' => '4132010292',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 765,
                'name' => '南京邮电大学',
                'city' => '南京市',
                'code' => '4132010293',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            265 => 
            array (
                'id' => 766,
                'name' => '河海大学',
                'city' => '南京市',
                'code' => '4132010294',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 767,
                'name' => '江南大学',
                'city' => '无锡市',
                'code' => '4132010295',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 768,
                'name' => '南京林业大学',
                'city' => '南京市',
                'code' => '4132010298',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            268 => 
            array (
                'id' => 769,
                'name' => '江苏大学',
                'city' => '镇江市',
                'code' => '4132010299',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            269 => 
            array (
                'id' => 770,
                'name' => '南京信息工程大学',
                'city' => '南京市',
                'code' => '4132010300',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            270 => 
            array (
                'id' => 771,
                'name' => '南通大学',
                'city' => '南通市',
                'code' => '4132010304',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            271 => 
            array (
                'id' => 772,
                'name' => '盐城工学院',
                'city' => '盐城市',
                'code' => '4132010305',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            272 => 
            array (
                'id' => 773,
                'name' => '南京农业大学',
                'city' => '南京市',
                'code' => '4132010307',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            273 => 
            array (
                'id' => 774,
                'name' => '南京医科大学',
                'city' => '南京市',
                'code' => '4132010312',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            274 => 
            array (
                'id' => 775,
                'name' => '徐州医科大学',
                'city' => '徐州市',
                'code' => '4132010313',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            275 => 
            array (
                'id' => 776,
                'name' => '南京中医药大学',
                'city' => '南京市',
                'code' => '4132010315',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            276 => 
            array (
                'id' => 777,
                'name' => '中国药科大学',
                'city' => '南京市',
                'code' => '4132010316',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            277 => 
            array (
                'id' => 778,
                'name' => '南京师范大学',
                'city' => '南京市',
                'code' => '4132010319',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            278 => 
            array (
                'id' => 779,
                'name' => '江苏师范大学',
                'city' => '徐州市',
                'code' => '4132010320',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            279 => 
            array (
                'id' => 780,
                'name' => '淮阴师范学院',
                'city' => '淮安市',
                'code' => '4132010323',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            280 => 
            array (
                'id' => 781,
                'name' => '盐城师范学院',
                'city' => '盐城市',
                'code' => '4132010324',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            281 => 
            array (
                'id' => 782,
                'name' => '南京财经大学',
                'city' => '南京市',
                'code' => '4132010327',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            282 => 
            array (
                'id' => 783,
                'name' => '江苏警官学院',
                'city' => '南京市',
                'code' => '4132010329',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            283 => 
            array (
                'id' => 784,
                'name' => '南京体育学院',
                'city' => '南京市',
                'code' => '4132010330',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            284 => 
            array (
                'id' => 785,
                'name' => '南京艺术学院',
                'city' => '南京市',
                'code' => '4132010331',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            285 => 
            array (
                'id' => 786,
                'name' => '苏州科技大学',
                'city' => '苏州市',
                'code' => '4132010332',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            286 => 
            array (
                'id' => 787,
                'name' => '常熟理工学院',
                'city' => '苏州市',
                'code' => '4132010333',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            287 => 
            array (
                'id' => 788,
                'name' => '南京工业职业技术大学',
                'city' => '南京市',
                'code' => '4132010850',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            288 => 
            array (
                'id' => 789,
                'name' => '淮阴工学院',
                'city' => '淮安市',
                'code' => '4132011049',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            289 => 
            array (
                'id' => 790,
                'name' => '常州工学院',
                'city' => '常州市',
                'code' => '4132011055',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            290 => 
            array (
                'id' => 791,
                'name' => '扬州大学',
                'city' => '扬州市',
                'code' => '4132011117',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            291 => 
            array (
                'id' => 792,
                'name' => '三江学院',
                'city' => '南京市',
                'code' => '4132011122',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            292 => 
            array (
                'id' => 793,
                'name' => '南京工程学院',
                'city' => '南京市',
                'code' => '4132011276',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            293 => 
            array (
                'id' => 794,
                'name' => '南京审计大学',
                'city' => '南京市',
                'code' => '4132011287',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            294 => 
            array (
                'id' => 795,
                'name' => '南京晓庄学院',
                'city' => '南京市',
                'code' => '4132011460',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            295 => 
            array (
                'id' => 796,
                'name' => '江苏理工学院',
                'city' => '常州市',
                'code' => '4132011463',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            296 => 
            array (
                'id' => 797,
                'name' => '江苏海洋大学',
                'city' => '连云港市',
                'code' => '4132011641',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            297 => 
            array (
                'id' => 798,
                'name' => '徐州工程学院',
                'city' => '徐州市',
                'code' => '4132011998',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            298 => 
            array (
                'id' => 799,
                'name' => '南京特殊教育师范学院',
                'city' => '南京市',
                'code' => '4132012048',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            299 => 
            array (
                'id' => 800,
                'name' => '南通理工学院',
                'city' => '南通市',
                'code' => '4132012056',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            300 => 
            array (
                'id' => 801,
                'name' => '南京森林警察学院',
                'city' => '南京市',
                'code' => '4132012213',
                'supervisor' => '公安部',
                'level' => '本科',
                'type' => '公办',
            ),
            301 => 
            array (
                'id' => 802,
                'name' => '东南大学成贤学院',
                'city' => '南京市',
                'code' => '4132012689',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            302 => 
            array (
                'id' => 803,
                'name' => '泰州学院',
                'city' => '泰州市',
                'code' => '4132012917',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            303 => 
            array (
                'id' => 804,
                'name' => '无锡太湖学院',
                'city' => '无锡市',
                'code' => '4132013571',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            304 => 
            array (
                'id' => 805,
                'name' => '金陵科技学院',
                'city' => '南京市',
                'code' => '4132013573',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            305 => 
            array (
                'id' => 806,
                'name' => '中国矿业大学徐海学院',
                'city' => '徐州市',
                'code' => '4132013579',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            306 => 
            array (
                'id' => 807,
                'name' => '南京大学金陵学院',
                'city' => '南京市',
                'code' => '4132013646',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            307 => 
            array (
                'id' => 808,
                'name' => '南京理工大学紫金学院',
                'city' => '南京市',
                'code' => '4132013654',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            308 => 
            array (
                'id' => 809,
                'name' => '南京航空航天大学金城学院',
                'city' => '南京市',
                'code' => '4132013655',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            309 => 
            array (
                'id' => 810,
                'name' => '南京传媒学院',
                'city' => '南京市',
                'code' => '4132013687',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            310 => 
            array (
                'id' => 811,
                'name' => '南京理工大学泰州科技学院',
                'city' => '泰州市',
                'code' => '4132013842',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            311 => 
            array (
                'id' => 812,
                'name' => '南京师范大学泰州学院',
                'city' => '泰州市',
                'code' => '4132013843',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            312 => 
            array (
                'id' => 813,
                'name' => '南京工业大学浦江学院',
                'city' => '南京市',
                'code' => '4132013905',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            313 => 
            array (
                'id' => 814,
                'name' => '南京师范大学中北学院',
                'city' => '镇江市',
                'code' => '4132013906',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            314 => 
            array (
                'id' => 815,
                'name' => '南京医科大学康达学院',
                'city' => '连云港市',
                'code' => '4132013980',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            315 => 
            array (
                'id' => 816,
                'name' => '南京中医药大学翰林学院',
                'city' => '泰州市',
                'code' => '4132013981',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            316 => 
            array (
                'id' => 817,
                'name' => '南京信息工程大学滨江学院',
                'city' => '无锡市',
                'code' => '4132013982',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            317 => 
            array (
                'id' => 818,
                'name' => '苏州大学文正学院',
                'city' => '苏州市',
                'code' => '4132013983',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            318 => 
            array (
                'id' => 819,
                'name' => '苏州大学应用技术学院',
                'city' => '苏州市',
                'code' => '4132013984',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            319 => 
            array (
                'id' => 820,
                'name' => '苏州科技大学天平学院',
                'city' => '苏州市',
                'code' => '4132013985',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            320 => 
            array (
                'id' => 821,
                'name' => '江苏大学京江学院',
                'city' => '镇江市',
                'code' => '4132013986',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            321 => 
            array (
                'id' => 822,
                'name' => '扬州大学广陵学院',
                'city' => '扬州市',
                'code' => '4132013987',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            322 => 
            array (
                'id' => 823,
                'name' => '江苏师范大学科文学院',
                'city' => '徐州市',
                'code' => '4132013988',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            323 => 
            array (
                'id' => 824,
                'name' => '南京邮电大学通达学院',
                'city' => '扬州市',
                'code' => '4132013989',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            324 => 
            array (
                'id' => 825,
                'name' => '南京财经大学红山学院',
                'city' => '镇江市',
                'code' => '4132013990',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            325 => 
            array (
                'id' => 826,
                'name' => '江苏科技大学苏州理工学院',
                'city' => '苏州市',
                'code' => '4132013991',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            326 => 
            array (
                'id' => 827,
                'name' => '常州大学怀德学院',
                'city' => '泰州市',
                'code' => '4132013992',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            327 => 
            array (
                'id' => 828,
                'name' => '南通大学杏林学院',
                'city' => '南通市',
                'code' => '4132013993',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            328 => 
            array (
                'id' => 829,
                'name' => '南京审计大学金审学院',
                'city' => '南京市',
                'code' => '4132013994',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            329 => 
            array (
                'id' => 830,
                'name' => '宿迁学院',
                'city' => '宿迁市',
                'code' => '4132014160',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            330 => 
            array (
                'id' => 831,
                'name' => '江苏第二师范学院',
                'city' => '南京市',
                'code' => '4132014436',
                'supervisor' => '江苏省',
                'level' => '本科',
                'type' => '公办',
            ),
            331 => 
            array (
                'id' => 832,
                'name' => '西交利物浦大学',
                'city' => '苏州市',
                'code' => '4132016403',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            332 => 
            array (
                'id' => 833,
                'name' => '昆山杜克大学',
                'city' => '昆山市',
                'code' => '4132016406',
                'supervisor' => '江苏省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            333 => 
            array (
                'id' => 834,
                'name' => '盐城幼儿师范高等专科学校',
                'city' => '盐城市',
                'code' => '3632000466',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            334 => 
            array (
                'id' => 835,
                'name' => '苏州幼儿师范高等专科学校',
                'city' => '苏州市',
                'code' => '3632000583',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            335 => 
            array (
                'id' => 836,
                'name' => '明达职业技术学院',
                'city' => '盐城市',
                'code' => '4132010826',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            336 => 
            array (
                'id' => 837,
                'name' => '无锡职业技术学院',
                'city' => '无锡市',
                'code' => '4132010848',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            337 => 
            array (
                'id' => 838,
                'name' => '江苏建筑职业技术学院',
                'city' => '徐州市',
                'code' => '4132010849',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            338 => 
            array (
                'id' => 839,
                'name' => '江苏工程职业技术学院',
                'city' => '南通市',
                'code' => '4132010958',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            339 => 
            array (
                'id' => 840,
                'name' => '苏州工艺美术职业技术学院',
                'city' => '苏州市',
                'code' => '4132010960',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            340 => 
            array (
                'id' => 841,
                'name' => '连云港职业技术学院',
                'city' => '连云港市',
                'code' => '4132011050',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            341 => 
            array (
                'id' => 842,
                'name' => '镇江市高等专科学校',
                'city' => '镇江市',
                'code' => '4132011051',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            342 => 
            array (
                'id' => 843,
                'name' => '南通职业大学',
                'city' => '南通市',
                'code' => '4132011052',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            343 => 
            array (
                'id' => 844,
                'name' => '苏州职业大学',
                'city' => '苏州市',
                'code' => '4132011054',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            344 => 
            array (
                'id' => 845,
                'name' => '沙洲职业工学院',
                'city' => '苏州市',
                'code' => '4132011288',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            345 => 
            array (
                'id' => 846,
                'name' => '扬州市职业大学',
                'city' => '扬州市',
                'code' => '4132011462',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            346 => 
            array (
                'id' => 847,
                'name' => '连云港师范高等专科学校',
                'city' => '连云港市',
                'code' => '4132011585',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            347 => 
            array (
                'id' => 848,
                'name' => '江苏经贸职业技术学院',
                'city' => '南京市',
                'code' => '4132012047',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            348 => 
            array (
                'id' => 849,
                'name' => '九州职业技术学院',
                'city' => '徐州市',
                'code' => '4132012054',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            349 => 
            array (
                'id' => 850,
                'name' => '硅湖职业技术学院',
                'city' => '苏州市',
                'code' => '4132012078',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            350 => 
            array (
                'id' => 851,
                'name' => '泰州职业技术学院',
                'city' => '泰州市',
                'code' => '4132012106',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            351 => 
            array (
                'id' => 852,
                'name' => '常州信息职业技术学院',
                'city' => '常州市',
                'code' => '4132012317',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            352 => 
            array (
                'id' => 853,
                'name' => '江苏联合职业技术学院',
                'city' => '南京市',
                'code' => '4132012678',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            353 => 
            array (
                'id' => 854,
                'name' => '江苏海事职业技术学院',
                'city' => '南京市',
                'code' => '4132012679',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            354 => 
            array (
                'id' => 855,
                'name' => '应天职业技术学院',
                'city' => '南京市',
                'code' => '4132012680',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            355 => 
            array (
                'id' => 856,
                'name' => '无锡科技职业学院',
                'city' => '无锡市',
                'code' => '4132012681',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            356 => 
            array (
                'id' => 857,
                'name' => '江苏医药职业学院',
                'city' => '盐城市',
                'code' => '4132012682',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            357 => 
            array (
                'id' => 858,
                'name' => '扬州环境资源职业技术学院',
                'city' => '扬州市',
                'code' => '4132012683',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            358 => 
            array (
                'id' => 859,
                'name' => '南通科技职业学院',
                'city' => '南通市',
                'code' => '4132012684',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            359 => 
            array (
                'id' => 860,
                'name' => '苏州经贸职业技术学院',
                'city' => '苏州市',
                'code' => '4132012685',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            360 => 
            array (
                'id' => 861,
                'name' => '苏州工业职业技术学院',
                'city' => '苏州市',
                'code' => '4132012686',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            361 => 
            array (
                'id' => 862,
                'name' => '苏州托普信息职业技术学院',
                'city' => '苏州市',
                'code' => '4132012687',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            362 => 
            array (
                'id' => 863,
                'name' => '苏州卫生职业技术学院',
                'city' => '苏州市',
                'code' => '4132012688',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            363 => 
            array (
                'id' => 864,
                'name' => '无锡商业职业技术学院',
                'city' => '无锡市',
                'code' => '4132012702',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            364 => 
            array (
                'id' => 865,
                'name' => '江苏航运职业技术学院',
                'city' => '南通市',
                'code' => '4132012703',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            365 => 
            array (
                'id' => 866,
                'name' => '南京交通职业技术学院',
                'city' => '南京市',
                'code' => '4132012804',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            366 => 
            array (
                'id' => 867,
                'name' => '江苏电子信息职业学院',
                'city' => '淮安市',
                'code' => '4132012805',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            367 => 
            array (
                'id' => 868,
                'name' => '江苏农牧科技职业学院',
                'city' => '泰州市',
                'code' => '4132012806',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            368 => 
            array (
                'id' => 869,
                'name' => '常州纺织服装职业技术学院',
                'city' => '常州市',
                'code' => '4132012807',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            369 => 
            array (
                'id' => 870,
                'name' => '苏州农业职业技术学院',
                'city' => '苏州市',
                'code' => '4132012808',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            370 => 
            array (
                'id' => 871,
                'name' => '苏州工业园区职业技术学院',
                'city' => '苏州市',
                'code' => '4132012809',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            371 => 
            array (
                'id' => 872,
                'name' => '太湖创意职业技术学院',
                'city' => '无锡市',
                'code' => '4132012918',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            372 => 
            array (
                'id' => 873,
                'name' => '炎黄职业技术学院',
                'city' => '淮安市',
                'code' => '4132012919',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            373 => 
            array (
                'id' => 874,
                'name' => '南京科技职业学院',
                'city' => '南京市',
                'code' => '4132012920',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            374 => 
            array (
                'id' => 875,
                'name' => '正德职业技术学院',
                'city' => '南京市',
                'code' => '4132012921',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            375 => 
            array (
                'id' => 876,
                'name' => '钟山职业技术学院',
                'city' => '南京市',
                'code' => '4132012922',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            376 => 
            array (
                'id' => 877,
                'name' => '无锡南洋职业技术学院',
                'city' => '无锡市',
                'code' => '4132012923',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            377 => 
            array (
                'id' => 878,
                'name' => '江南影视艺术职业学院',
                'city' => '无锡市',
                'code' => '4132013017',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            378 => 
            array (
                'id' => 879,
                'name' => '金肯职业技术学院',
                'city' => '南京市',
                'code' => '4132013100',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            379 => 
            array (
                'id' => 880,
                'name' => '常州工业职业技术学院',
                'city' => '常州市',
                'code' => '4132013101',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            380 => 
            array (
                'id' => 881,
                'name' => '常州工程职业技术学院',
                'city' => '常州市',
                'code' => '4132013102',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            381 => 
            array (
                'id' => 882,
                'name' => '江苏农林职业技术学院',
                'city' => '镇江市',
                'code' => '4132013103',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            382 => 
            array (
                'id' => 883,
                'name' => '江苏食品药品职业技术学院',
                'city' => '淮安市',
                'code' => '4132013104',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            383 => 
            array (
                'id' => 884,
                'name' => '建东职业技术学院',
                'city' => '常州市',
                'code' => '4132013105',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            384 => 
            array (
                'id' => 885,
                'name' => '南京铁道职业技术学院',
                'city' => '南京市',
                'code' => '4132013106',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            385 => 
            array (
                'id' => 886,
                'name' => '徐州工业职业技术学院',
                'city' => '徐州市',
                'code' => '4132013107',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            386 => 
            array (
                'id' => 887,
                'name' => '江苏信息职业技术学院',
                'city' => '无锡市',
                'code' => '4132013108',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            387 => 
            array (
                'id' => 888,
                'name' => '宿迁职业技术学院',
                'city' => '宿迁市',
                'code' => '4132013110',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            388 => 
            array (
                'id' => 889,
                'name' => '南京信息职业技术学院',
                'city' => '南京市',
                'code' => '4132013112',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            389 => 
            array (
                'id' => 890,
                'name' => '江海职业技术学院',
                'city' => '扬州市',
                'code' => '4132013113',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            390 => 
            array (
                'id' => 891,
                'name' => '常州机电职业技术学院',
                'city' => '常州市',
                'code' => '4132013114',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            391 => 
            array (
                'id' => 892,
                'name' => '江阴职业技术学院',
                'city' => '无锡市',
                'code' => '4132013137',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            392 => 
            array (
                'id' => 893,
                'name' => '无锡城市职业技术学院',
                'city' => '无锡市',
                'code' => '4132013748',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            393 => 
            array (
                'id' => 894,
                'name' => '无锡工艺职业技术学院',
                'city' => '无锡市',
                'code' => '4132013749',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            394 => 
            array (
                'id' => 895,
                'name' => '金山职业技术学院',
                'city' => '镇江市',
                'code' => '4132013750',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            395 => 
            array (
                'id' => 896,
                'name' => '苏州健雄职业技术学院',
                'city' => '苏州市',
                'code' => '4132013751',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            396 => 
            array (
                'id' => 897,
                'name' => '盐城工业职业技术学院',
                'city' => '盐城市',
                'code' => '4132013752',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            397 => 
            array (
                'id' => 898,
                'name' => '江苏财经职业技术学院',
                'city' => '淮安市',
                'code' => '4132013753',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            398 => 
            array (
                'id' => 899,
                'name' => '扬州工业职业技术学院',
                'city' => '扬州市',
                'code' => '4132013754',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            399 => 
            array (
                'id' => 900,
                'name' => '苏州百年职业学院',
                'city' => '苏州市',
                'code' => '4132013962',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '公办',
            ),
            400 => 
            array (
                'id' => 901,
                'name' => '昆山登云科技职业学院',
                'city' => '苏州市',
                'code' => '4132013963',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            401 => 
            array (
                'id' => 902,
                'name' => '南京视觉艺术职业学院',
                'city' => '南京市',
                'code' => '4132013964',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            402 => 
            array (
                'id' => 903,
                'name' => '江苏城市职业学院',
                'city' => '南京市',
                'code' => '4132014000',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            403 => 
            array (
                'id' => 904,
                'name' => '南京城市职业学院',
                'city' => '南京市',
                'code' => '4132014001',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            404 => 
            array (
                'id' => 905,
                'name' => '南京机电职业技术学院',
                'city' => '南京市',
                'code' => '4132014056',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            405 => 
            array (
                'id' => 906,
                'name' => '苏州高博软件技术职业学院',
                'city' => '苏州市',
                'code' => '4132014163',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            406 => 
            array (
                'id' => 907,
                'name' => '南京旅游职业学院',
                'city' => '南京市',
                'code' => '4132014180',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            407 => 
            array (
                'id' => 908,
                'name' => '江苏卫生健康职业学院',
                'city' => '南京市',
                'code' => '4132014255',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            408 => 
            array (
                'id' => 909,
                'name' => '苏州信息职业技术学院',
                'city' => '苏州市',
                'code' => '4132014256',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            409 => 
            array (
                'id' => 910,
                'name' => '宿迁泽达职业技术学院',
                'city' => '宿迁市',
                'code' => '4132014293',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            410 => 
            array (
                'id' => 911,
                'name' => '苏州工业园区服务外包职业学院',
                'city' => '苏州市',
                'code' => '4132014295',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            411 => 
            array (
                'id' => 912,
                'name' => '徐州幼儿师范高等专科学校',
                'city' => '徐州市',
                'code' => '4132014329',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            412 => 
            array (
                'id' => 913,
                'name' => '徐州生物工程职业技术学院',
                'city' => '徐州市',
                'code' => '4132014401',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            413 => 
            array (
                'id' => 914,
                'name' => '江苏商贸职业学院',
                'city' => '南通市',
                'code' => '4132014475',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            414 => 
            array (
                'id' => 915,
                'name' => '南通师范高等专科学校',
                'city' => '南通市',
                'code' => '4132014493',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            415 => 
            array (
                'id' => 916,
                'name' => '扬州中瑞酒店职业学院',
                'city' => '扬州市',
                'code' => '4132014528',
                'supervisor' => '江苏省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            416 => 
            array (
                'id' => 917,
                'name' => '江苏护理职业学院',
                'city' => '淮安市',
                'code' => '4132014541',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            417 => 
            array (
                'id' => 918,
                'name' => '江苏财会职业学院',
                'city' => '连云港市',
                'code' => '4132014542',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            418 => 
            array (
                'id' => 919,
                'name' => '江苏城乡建设职业学院',
                'city' => '常州市',
                'code' => '4132014543',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            419 => 
            array (
                'id' => 920,
                'name' => '江苏航空职业技术学院',
                'city' => '镇江市',
                'code' => '4132014568',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            420 => 
            array (
                'id' => 921,
                'name' => '江苏安全技术职业学院',
                'city' => '徐州市',
                'code' => '4132014589',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            421 => 
            array (
                'id' => 922,
                'name' => '江苏旅游职业学院',
                'city' => '扬州市',
                'code' => '4132014604',
                'supervisor' => '江苏省',
                'level' => '专科',
                'type' => '公办',
            ),
            422 => 
            array (
                'id' => 923,
                'name' => '中国人民解放军陆军工程大学',
                'city' => '南京市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => '中国人民解放军海军指挥学院',
                'city' => '南京市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => '浙江大学',
                'city' => '杭州市',
                'code' => '4133010335',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            425 => 
            array (
                'id' => 926,
                'name' => '杭州电子科技大学',
                'city' => '杭州市',
                'code' => '4133010336',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            426 => 
            array (
                'id' => 927,
                'name' => '浙江工业大学',
                'city' => '杭州市',
                'code' => '4133010337',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            427 => 
            array (
                'id' => 928,
                'name' => '浙江理工大学',
                'city' => '杭州市',
                'code' => '4133010338',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            428 => 
            array (
                'id' => 929,
                'name' => '浙江海洋大学',
                'city' => '舟山市',
                'code' => '4133010340',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            429 => 
            array (
                'id' => 930,
                'name' => '浙江农林大学',
                'city' => '杭州市',
                'code' => '4133010341',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            430 => 
            array (
                'id' => 931,
                'name' => '温州医科大学',
                'city' => '温州市',
                'code' => '4133010343',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            431 => 
            array (
                'id' => 932,
                'name' => '浙江中医药大学',
                'city' => '杭州市',
                'code' => '4133010344',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            432 => 
            array (
                'id' => 933,
                'name' => '浙江师范大学',
                'city' => '金华市',
                'code' => '4133010345',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            433 => 
            array (
                'id' => 934,
                'name' => '杭州师范大学',
                'city' => '杭州市',
                'code' => '4133010346',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            434 => 
            array (
                'id' => 935,
                'name' => '湖州师范学院',
                'city' => '湖州市',
                'code' => '4133010347',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            435 => 
            array (
                'id' => 936,
                'name' => '绍兴文理学院',
                'city' => '绍兴市',
                'code' => '4133010349',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            436 => 
            array (
                'id' => 937,
                'name' => '台州学院',
                'city' => '台州市',
                'code' => '4133010350',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            437 => 
            array (
                'id' => 938,
                'name' => '温州大学',
                'city' => '温州市',
                'code' => '4133010351',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            438 => 
            array (
                'id' => 939,
                'name' => '丽水学院',
                'city' => '丽水市',
                'code' => '4133010352',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            439 => 
            array (
                'id' => 940,
                'name' => '浙江工商大学',
                'city' => '杭州市',
                'code' => '4133010353',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            440 => 
            array (
                'id' => 941,
                'name' => '嘉兴学院',
                'city' => '嘉兴市',
                'code' => '4133010354',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            441 => 
            array (
                'id' => 942,
                'name' => '中国美术学院',
                'city' => '杭州市',
                'code' => '4133010355',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            442 => 
            array (
                'id' => 943,
                'name' => '中国计量大学',
                'city' => '杭州市',
                'code' => '4133010356',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            443 => 
            array (
                'id' => 944,
                'name' => '浙江万里学院',
                'city' => '宁波市',
                'code' => '4133010876',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            444 => 
            array (
                'id' => 945,
                'name' => '浙江科技学院',
                'city' => '杭州市',
                'code' => '4133011057',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            445 => 
            array (
                'id' => 946,
                'name' => '宁波工程学院',
                'city' => '宁波市',
                'code' => '4133011058',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            446 => 
            array (
                'id' => 947,
                'name' => '浙江水利水电学院',
                'city' => '杭州市',
                'code' => '4133011481',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            447 => 
            array (
                'id' => 948,
                'name' => '浙江财经大学',
                'city' => '杭州市',
                'code' => '4133011482',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            448 => 
            array (
                'id' => 949,
                'name' => '浙江警察学院',
                'city' => '杭州市',
                'code' => '4133011483',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            449 => 
            array (
                'id' => 950,
                'name' => '衢州学院',
                'city' => '衢州市',
                'code' => '4133011488',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            450 => 
            array (
                'id' => 951,
                'name' => '宁波大学',
                'city' => '宁波市',
                'code' => '4133011646',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            451 => 
            array (
                'id' => 952,
                'name' => '浙江传媒学院',
                'city' => '杭州市',
                'code' => '4133011647',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            452 => 
            array (
                'id' => 953,
                'name' => '浙江树人学院',
                'city' => '杭州市',
                'code' => '4133011842',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            453 => 
            array (
                'id' => 954,
                'name' => '浙江越秀外国语学院',
                'city' => '绍兴市',
                'code' => '4133012792',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            454 => 
            array (
                'id' => 955,
                'name' => '宁波财经学院',
                'city' => '宁波市',
                'code' => '4133013001',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            455 => 
            array (
                'id' => 956,
                'name' => '浙大城市学院',
                'city' => '杭州市',
                'code' => '4133013021',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            456 => 
            array (
                'id' => 957,
                'name' => '浙大宁波理工学院',
                'city' => '宁波市',
                'code' => '4133013022',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            457 => 
            array (
                'id' => 958,
                'name' => '杭州医学院',
                'city' => '杭州市',
                'code' => '4133013023',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            458 => 
            array (
                'id' => 959,
                'name' => '浙江广厦建设职业技术大学',
                'city' => '金华市',
                'code' => '4133013029',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            459 => 
            array (
                'id' => 960,
                'name' => '浙江工业大学之江学院',
                'city' => '杭州市',
                'code' => '4133013275',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            460 => 
            array (
                'id' => 961,
                'name' => '浙江师范大学行知学院',
                'city' => '金华市',
                'code' => '4133013276',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            461 => 
            array (
                'id' => 962,
                'name' => '宁波大学科学技术学院',
                'city' => '宁波市',
                'code' => '4133013277',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            462 => 
            array (
                'id' => 963,
                'name' => '杭州电子科技大学信息工程学院',
                'city' => '杭州市',
                'code' => '4133013279',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            463 => 
            array (
                'id' => 964,
                'name' => '浙江理工大学科技与艺术学院',
                'city' => '杭州市',
                'code' => '4133013280',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            464 => 
            array (
                'id' => 965,
                'name' => '浙江海洋大学东海科学技术学院',
                'city' => '舟山市',
                'code' => '4133013282',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            465 => 
            array (
                'id' => 966,
                'name' => '浙江农林大学暨阳学院',
                'city' => '绍兴市',
                'code' => '4133013283',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            466 => 
            array (
                'id' => 967,
                'name' => '温州医科大学仁济学院',
                'city' => '温州市',
                'code' => '4133013284',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            467 => 
            array (
                'id' => 968,
                'name' => '浙江中医药大学滨江学院',
                'city' => '杭州市',
                'code' => '4133013285',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            468 => 
            array (
                'id' => 969,
                'name' => '杭州师范大学钱江学院',
                'city' => '杭州市',
                'code' => '4133013286',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            469 => 
            array (
                'id' => 970,
                'name' => '湖州师范学院求真学院',
                'city' => '湖州市',
                'code' => '4133013287',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            470 => 
            array (
                'id' => 971,
                'name' => '绍兴文理学院元培学院',
                'city' => '绍兴市',
                'code' => '4133013288',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            471 => 
            array (
                'id' => 972,
                'name' => '温州大学瓯江学院',
                'city' => '温州市',
                'code' => '4133013289',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            472 => 
            array (
                'id' => 973,
                'name' => '浙江工商大学杭州商学院',
                'city' => '杭州市',
                'code' => '4133013290',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            473 => 
            array (
                'id' => 974,
                'name' => '嘉兴学院南湖学院',
                'city' => '嘉兴市',
                'code' => '4133013291',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            474 => 
            array (
                'id' => 975,
                'name' => '中国计量大学现代科技学院',
                'city' => '杭州市',
                'code' => '4133013292',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            475 => 
            array (
                'id' => 976,
                'name' => '浙江财经大学东方学院',
                'city' => '嘉兴市',
                'code' => '4133013294',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            476 => 
            array (
                'id' => 977,
                'name' => '温州商学院',
                'city' => '温州市',
                'code' => '4133013637',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            477 => 
            array (
                'id' => 978,
                'name' => '同济大学浙江学院',
                'city' => '嘉兴市',
                'code' => '4133014206',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            478 => 
            array (
                'id' => 979,
                'name' => '上海财经大学浙江学院',
                'city' => '金华市',
                'code' => '4133014207',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            479 => 
            array (
                'id' => 980,
                'name' => '浙江外国语学院',
                'city' => '杭州市',
                'code' => '4133014275',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            480 => 
            array (
                'id' => 981,
                'name' => '浙江音乐学院',
                'city' => '杭州市',
                'code' => '4133014535',
                'supervisor' => '浙江省',
                'level' => '本科',
                'type' => '公办',
            ),
            481 => 
            array (
                'id' => 982,
                'name' => '西湖大学',
                'city' => '杭州市',
                'code' => '4133014626',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            482 => 
            array (
                'id' => 983,
                'name' => '宁波诺丁汉大学',
                'city' => '宁波市',
                'code' => '4133016301',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            483 => 
            array (
                'id' => 984,
                'name' => '温州肯恩大学',
                'city' => '温州市',
                'code' => '4133016405',
                'supervisor' => '浙江省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            484 => 
            array (
                'id' => 985,
                'name' => '宁波职业技术学院',
                'city' => '宁波市',
                'code' => '4133010863',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            485 => 
            array (
                'id' => 986,
                'name' => '温州职业技术学院',
                'city' => '温州市',
                'code' => '4133010864',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            486 => 
            array (
                'id' => 987,
                'name' => '浙江交通职业技术学院',
                'city' => '杭州市',
                'code' => '4133012036',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            487 => 
            array (
                'id' => 988,
                'name' => '金华职业技术学院',
                'city' => '金华市',
                'code' => '4133012061',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            488 => 
            array (
                'id' => 989,
                'name' => '宁波城市职业技术学院',
                'city' => '宁波市',
                'code' => '4133012645',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            489 => 
            array (
                'id' => 990,
                'name' => '浙江电力职业技术学院',
                'city' => '杭州市',
                'code' => '4133012646',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            490 => 
            array (
                'id' => 991,
                'name' => '浙江同济科技职业学院',
                'city' => '杭州市',
                'code' => '4133012647',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            491 => 
            array (
                'id' => 992,
                'name' => '浙江工商职业技术学院',
                'city' => '宁波市',
                'code' => '4133012789',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            492 => 
            array (
                'id' => 993,
                'name' => '台州职业技术学院',
                'city' => '台州市',
                'code' => '4133012790',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            493 => 
            array (
                'id' => 994,
                'name' => '浙江工贸职业技术学院',
                'city' => '温州市',
                'code' => '4133012791',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            494 => 
            array (
                'id' => 995,
                'name' => '浙江医药高等专科学校',
                'city' => '宁波市',
                'code' => '4133012860',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            495 => 
            array (
                'id' => 996,
                'name' => '浙江机电职业技术学院',
                'city' => '杭州市',
                'code' => '4133012861',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            496 => 
            array (
                'id' => 997,
                'name' => '浙江建设职业技术学院',
                'city' => '杭州市',
                'code' => '4133012862',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            497 => 
            array (
                'id' => 998,
                'name' => '浙江艺术职业学院',
                'city' => '杭州市',
                'code' => '4133012863',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            498 => 
            array (
                'id' => 999,
                'name' => '浙江经贸职业技术学院',
                'city' => '杭州市',
                'code' => '4133012864',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => '浙江商业职业技术学院',
                'city' => '杭州市',
                'code' => '4133012865',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => '浙江经济职业技术学院',
                'city' => '杭州市',
                'code' => '4133012866',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => '浙江旅游职业学院',
                'city' => '杭州市',
                'code' => '4133012867',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => '浙江育英职业技术学院',
                'city' => '杭州市',
                'code' => '4133012868',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => '浙江警官职业学院',
                'city' => '杭州市',
                'code' => '4133012869',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => '浙江金融职业学院',
                'city' => '杭州市',
                'code' => '4133012870',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => '浙江工业职业技术学院',
                'city' => '绍兴市',
                'code' => '4133012871',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => '杭州职业技术学院',
                'city' => '杭州市',
                'code' => '4133012872',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => '嘉兴职业技术学院',
                'city' => '嘉兴市',
                'code' => '4133012874',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => '湖州职业技术学院',
                'city' => '湖州市',
                'code' => '4133012875',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => '绍兴职业技术学院',
                'city' => '绍兴市',
                'code' => '4133012876',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => '衢州职业技术学院',
                'city' => '衢州市',
                'code' => '4133012877',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => '丽水职业技术学院',
                'city' => '丽水市',
                'code' => '4133012878',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => '浙江东方职业技术学院',
                'city' => '温州市',
                'code' => '4133013002',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => '义乌工商职业技术学院',
                'city' => '金华市',
                'code' => '4133013003',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => '浙江纺织服装职业技术学院',
                'city' => '宁波市',
                'code' => '4133013025',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => '杭州科技职业技术学院',
                'city' => '杭州市',
                'code' => '4133013026',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => '浙江长征职业技术学院',
                'city' => '杭州市',
                'code' => '4133013027',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => '嘉兴南洋职业技术学院',
                'city' => '嘉兴市',
                'code' => '4133013028',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => '杭州万向职业技术学院',
                'city' => '杭州市',
                'code' => '4133013030',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => '浙江邮电职业技术学院',
                'city' => '绍兴市',
                'code' => '4133013688',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => '宁波卫生职业技术学院',
                'city' => '宁波市',
                'code' => '4133013742',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => '台州科技职业学院',
                'city' => '台州市',
                'code' => '4133013746',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => '浙江国际海运职业技术学院',
                'city' => '舟山市',
                'code' => '4133013853',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => '浙江体育职业技术学院',
                'city' => '杭州市',
                'code' => '4133013854',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => '温州科技职业学院',
                'city' => '温州市',
                'code' => '4133014088',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => '浙江汽车职业技术学院',
                'city' => '台州市',
                'code' => '4133014089',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => '浙江横店影视职业学院',
                'city' => '金华市',
                'code' => '4133014090',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => '浙江农业商贸职业学院',
                'city' => '绍兴市',
                'code' => '4133014269',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => '浙江特殊教育职业学院',
                'city' => '杭州市',
                'code' => '4133014431',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => '浙江安防职业技术学院',
                'city' => '温州市',
                'code' => '4133014492',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => '浙江宇翔职业技术学院',
                'city' => '湖州市',
                'code' => '4133014703',
                'supervisor' => '浙江省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => '浙江舟山群岛新区旅游与健康职业学院',
                'city' => '舟山市',
                'code' => '4133016408',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => '宁波幼儿师范高等专科学校',
                'city' => '宁波市',
                'code' => '4233050559',
                'supervisor' => '浙江省',
                'level' => '专科',
                'type' => '公办',
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => '中国人民武装警察部队海警学院',
                'city' => '宁波市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => '安徽大学',
                'city' => '合肥市',
                'code' => '4134010357',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => '中国科学技术大学',
                'city' => '合肥市',
                'code' => '4134010358',
                'supervisor' => '中国科学院',
                'level' => '本科',
                'type' => '公办',
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => '合肥工业大学',
                'city' => '合肥市',
                'code' => '4134010359',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => '安徽工业大学',
                'city' => '马鞍山市',
                'code' => '4134010360',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => '安徽理工大学',
                'city' => '淮南市',
                'code' => '4134010361',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => '安徽工程大学',
                'city' => '芜湖市',
                'code' => '4134010363',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => '安徽农业大学',
                'city' => '合肥市',
                'code' => '4134010364',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => '安徽医科大学',
                'city' => '合肥市',
                'code' => '4134010366',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => '蚌埠医学院',
                'city' => '蚌埠市',
                'code' => '4134010367',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => '皖南医学院',
                'city' => '芜湖市',
                'code' => '4134010368',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => '安徽中医药大学',
                'city' => '合肥市',
                'code' => '4134010369',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => '安徽师范大学',
                'city' => '芜湖市',
                'code' => '4134010370',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => '阜阳师范大学',
                'city' => '阜阳市',
                'code' => '4134010371',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => '安庆师范大学',
                'city' => '安庆市',
                'code' => '4134010372',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => '淮北师范大学',
                'city' => '淮北市',
                'code' => '4134010373',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => '黄山学院',
                'city' => '黄山市',
                'code' => '4134010375',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => '皖西学院',
                'city' => '六安市',
                'code' => '4134010376',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => '滁州学院',
                'city' => '滁州市',
                'code' => '4134010377',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => '安徽财经大学',
                'city' => '蚌埠市',
                'code' => '4134010378',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => '宿州学院',
                'city' => '宿州市',
                'code' => '4134010379',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => '巢湖学院',
                'city' => '合肥市',
                'code' => '4134010380',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => '淮南师范学院',
                'city' => '淮南市',
                'code' => '4134010381',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => '铜陵学院',
                'city' => '铜陵市',
                'code' => '4134010383',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => '安徽建筑大学',
                'city' => '合肥市',
                'code' => '4134010878',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => '安徽科技学院',
                'city' => '滁州市',
                'code' => '4134010879',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => '安徽三联学院',
                'city' => '合肥市',
                'code' => '4134010959',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => '合肥学院',
                'city' => '合肥市',
                'code' => '4134011059',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => '蚌埠学院',
                'city' => '蚌埠市',
                'code' => '4134011305',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => '池州学院',
                'city' => '池州市',
                'code' => '4134011306',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => '安徽新华学院',
                'city' => '合肥市',
                'code' => '4134012216',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => '安徽文达信息工程学院',
                'city' => '合肥市',
                'code' => '4134012810',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => '亳州学院',
                'city' => '亳州市',
                'code' => '4134012926',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => '安徽外国语学院',
                'city' => '合肥市',
                'code' => '4134013065',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => '蚌埠工商学院',
                'city' => '蚌埠市',
                'code' => '4134013611',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => '安徽大学江淮学院',
                'city' => '合肥市',
                'code' => '4134013612',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => '安徽信息工程学院',
                'city' => '芜湖市',
                'code' => '4134013613',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => '马鞍山学院',
                'city' => '马鞍山市',
                'code' => '4134013614',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => '安徽建筑大学城市建设学院',
                'city' => '合肥市',
                'code' => '4134013615',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => '安徽农业大学经济技术学院',
                'city' => '合肥市',
                'code' => '4134013616',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => '安徽师范大学皖江学院',
                'city' => '芜湖市',
                'code' => '4134013617',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => '安徽医科大学临床医学院',
                'city' => '合肥市',
                'code' => '4134013618',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => '阜阳师范大学信息工程学院',
                'city' => '阜阳市',
                'code' => '4134013619',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => '淮北师范大学信息学院',
                'city' => '淮北市',
                'code' => '4134013620',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => '合肥师范学院',
                'city' => '合肥市',
                'code' => '4134014098',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => '皖江工学院',
                'city' => '马鞍山市',
                'code' => '4134014203',
                'supervisor' => '安徽省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => '安徽艺术学院',
                'city' => '合肥市',
                'code' => '4134014682',
                'supervisor' => '安徽省',
                'level' => '本科',
                'type' => '公办',
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => '安徽职业技术学院',
                'city' => '合肥市',
                'code' => '4134010869',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => '淮北职业技术学院',
                'city' => '淮北市',
                'code' => '4134010963',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => '芜湖职业技术学院',
                'city' => '芜湖市',
                'code' => '4134011061',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => '淮南联合大学',
                'city' => '淮南市',
                'code' => '4134011308',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => '安徽商贸职业技术学院',
                'city' => '芜湖市',
                'code' => '4134012072',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => '安徽水利水电职业技术学院',
                'city' => '合肥市',
                'code' => '4134012073',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => '阜阳职业技术学院',
                'city' => '阜阳市',
                'code' => '4134012074',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => '铜陵职业技术学院',
                'city' => '铜陵市',
                'code' => '4134012217',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => '民办万博科技职业学院',
                'city' => '合肥市',
                'code' => '4134012218',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => '安徽警官职业学院',
                'city' => '合肥市',
                'code' => '4134012219',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => '淮南职业技术学院',
                'city' => '淮南市',
                'code' => '4134012220',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => '安徽工业经济职业技术学院',
                'city' => '合肥市',
                'code' => '4134012334',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => '合肥通用职业技术学院',
                'city' => '合肥市',
                'code' => '4134012410',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => '安徽工贸职业技术学院',
                'city' => '淮南市',
                'code' => '4134012811',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => '宿州职业技术学院',
                'city' => '宿州市',
                'code' => '4134012812',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => '六安职业技术学院',
                'city' => '六安市',
                'code' => '4134012813',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => '安徽电子信息职业技术学院',
                'city' => '蚌埠市',
                'code' => '4134012814',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => '民办合肥经济技术职业学院',
                'city' => '合肥市',
                'code' => '4134012815',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => '安徽交通职业技术学院',
                'city' => '合肥市',
                'code' => '4134012816',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => '安徽体育运动职业技术学院',
                'city' => '合肥市',
                'code' => '4134012817',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => '安徽中医药高等专科学校',
                'city' => '芜湖市',
                'code' => '4134012924',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => '安徽医学高等专科学校',
                'city' => '合肥市',
                'code' => '4134012925',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => '合肥职业技术学院',
                'city' => '合肥市',
                'code' => '4134013058',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => '滁州职业技术学院',
                'city' => '滁州市',
                'code' => '4134013059',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => '池州职业技术学院',
                'city' => '池州市',
                'code' => '4134013060',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => '宣城职业技术学院',
                'city' => '宣城市',
                'code' => '4134013061',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => '安徽广播影视职业技术学院',
                'city' => '合肥市',
                'code' => '4134013062',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => '民办合肥滨湖职业技术学院',
                'city' => '合肥市',
                'code' => '4134013064',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => '安徽电气工程职业技术学院',
                'city' => '合肥市',
                'code' => '4134013336',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => '安徽冶金科技职业学院',
                'city' => '马鞍山市',
                'code' => '4134013337',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => '安徽城市管理职业学院',
                'city' => '合肥市',
                'code' => '4134013338',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => '安徽机电职业技术学院',
                'city' => '芜湖市',
                'code' => '4134013339',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => '安徽工商职业学院',
                'city' => '合肥市',
                'code' => '4134013340',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => '安徽中澳科技职业学院',
                'city' => '合肥市',
                'code' => '4134013341',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => '阜阳科技职业学院',
                'city' => '阜阳市',
                'code' => '4134013342',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => '亳州职业技术学院',
                'city' => '亳州市',
                'code' => '4134013343',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => '安徽国防科技职业学院',
                'city' => '六安市',
                'code' => '4134013344',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => '安庆职业技术学院',
                'city' => '安庆市',
                'code' => '4134013345',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => '安徽艺术职业学院',
                'city' => '合肥市',
                'code' => '4134013346',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => '马鞍山师范高等专科学校',
                'city' => '马鞍山市',
                'code' => '4134013760',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => '安徽财贸职业学院',
                'city' => '合肥市',
                'code' => '4134013845',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => '安徽国际商务职业学院',
                'city' => '合肥市',
                'code' => '4134013846',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => '安徽公安职业学院',
                'city' => '合肥市',
                'code' => '4134013847',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => '安徽林业职业技术学院',
                'city' => '合肥市',
                'code' => '4134013848',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => '安徽审计职业学院',
                'city' => '合肥市',
                'code' => '4134013849',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            125 => 
            array (
                'id' => 1126,
                'name' => '安徽新闻出版职业技术学院',
                'city' => '合肥市',
                'code' => '4134013850',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            126 => 
            array (
                'id' => 1127,
                'name' => '安徽邮电职业技术学院',
                'city' => '合肥市',
                'code' => '4134013851',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            127 => 
            array (
                'id' => 1128,
                'name' => '安徽工业职业技术学院',
                'city' => '铜陵市',
                'code' => '4134013852',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            128 => 
            array (
                'id' => 1129,
                'name' => '民办合肥财经职业学院',
                'city' => '合肥市',
                'code' => '4134014058',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            129 => 
            array (
                'id' => 1130,
                'name' => '安庆医药高等专科学校',
                'city' => '安庆市',
                'code' => '4134014096',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            130 => 
            array (
                'id' => 1131,
                'name' => '安徽涉外经济职业学院',
                'city' => '合肥市',
                'code' => '4134014132',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            131 => 
            array (
                'id' => 1132,
                'name' => '安徽绿海商务职业学院',
                'city' => '合肥市',
                'code' => '4134014133',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            132 => 
            array (
                'id' => 1133,
                'name' => '合肥共达职业技术学院',
                'city' => '合肥市',
                'code' => '4134014135',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            133 => 
            array (
                'id' => 1134,
                'name' => '蚌埠经济技术职业学院',
                'city' => '蚌埠市',
                'code' => '4134014137',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            134 => 
            array (
                'id' => 1135,
                'name' => '民办安徽旅游职业学院',
                'city' => '阜阳市',
                'code' => '4134014165',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            135 => 
            array (
                'id' => 1136,
                'name' => '徽商职业学院',
                'city' => '合肥市',
                'code' => '4134014191',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            136 => 
            array (
                'id' => 1137,
                'name' => '马鞍山职业技术学院',
                'city' => '马鞍山市',
                'code' => '4134014192',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            137 => 
            array (
                'id' => 1138,
                'name' => '安徽现代信息工程职业学院',
                'city' => '淮南市',
                'code' => '4134014210',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            138 => 
            array (
                'id' => 1139,
                'name' => '安徽矿业职业技术学院',
                'city' => '淮北市',
                'code' => '4134014229',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            139 => 
            array (
                'id' => 1140,
                'name' => '合肥信息技术职业学院',
                'city' => '合肥市',
                'code' => '4134014230',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            140 => 
            array (
                'id' => 1141,
                'name' => '桐城师范高等专科学校',
                'city' => '安庆市',
                'code' => '4134014273',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            141 => 
            array (
                'id' => 1142,
                'name' => '黄山职业技术学院',
                'city' => '黄山市',
                'code' => '4134014296',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            142 => 
            array (
                'id' => 1143,
                'name' => '滁州城市职业学院',
                'city' => '滁州市',
                'code' => '4134014297',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            143 => 
            array (
                'id' => 1144,
                'name' => '安徽汽车职业技术学院',
                'city' => '合肥市',
                'code' => '4134014298',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            144 => 
            array (
                'id' => 1145,
                'name' => '皖西卫生职业学院',
                'city' => '六安市',
                'code' => '4134014299',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            145 => 
            array (
                'id' => 1146,
                'name' => '合肥幼儿师范高等专科学校',
                'city' => '合肥市',
                'code' => '4134014330',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            146 => 
            array (
                'id' => 1147,
                'name' => '安徽扬子职业技术学院',
                'city' => '芜湖市',
                'code' => '4134014342',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            147 => 
            array (
                'id' => 1148,
                'name' => '安徽黄梅戏艺术职业学院',
                'city' => '安庆市',
                'code' => '4134014378',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            148 => 
            array (
                'id' => 1149,
                'name' => '安徽粮食工程职业学院',
                'city' => '合肥市',
                'code' => '4134014418',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 1150,
                'name' => '安徽卫生健康职业学院',
                'city' => '池州市',
                'code' => '4134014419',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 1151,
                'name' => '合肥科技职业学院',
                'city' => '合肥市',
                'code' => '4134014420',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            151 => 
            array (
                'id' => 1152,
                'name' => '皖北卫生职业学院',
                'city' => '宿州市',
                'code' => '4134014502',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            152 => 
            array (
                'id' => 1153,
                'name' => '阜阳幼儿师范高等专科学校',
                'city' => '阜阳市',
                'code' => '4134014536',
                'supervisor' => '安徽省',
                'level' => '专科',
                'type' => '公办',
            ),
            153 => 
            array (
                'id' => 1154,
                'name' => '黄山健康职业学院',
                'city' => '黄山市',
                'code' => '4134014704',
                'supervisor' => '安徽省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            154 => 
            array (
                'id' => 1155,
                'name' => '中国人民解放军陆军炮兵防空兵学院',
                'city' => '合肥市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'name' => '中国人民解放军海军士官学校',
                'city' => '蚌埠市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'name' => '厦门大学',
                'city' => '厦门市',
                'code' => '4135010384',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            157 => 
            array (
                'id' => 1158,
                'name' => '华侨大学',
                'city' => '泉州市',
                'code' => '4135010385',
                'supervisor' => '中央统战部',
                'level' => '本科',
                'type' => '公办',
            ),
            158 => 
            array (
                'id' => 1159,
                'name' => '福州大学',
                'city' => '福州市',
                'code' => '4135010386',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            159 => 
            array (
                'id' => 1160,
                'name' => '福建工程学院',
                'city' => '福州市',
                'code' => '4135010388',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 1161,
                'name' => '福建农林大学',
                'city' => '福州市',
                'code' => '4135010389',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            161 => 
            array (
                'id' => 1162,
                'name' => '集美大学',
                'city' => '厦门市',
                'code' => '4135010390',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 1163,
                'name' => '福建医科大学',
                'city' => '福州市',
                'code' => '4135010392',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            163 => 
            array (
                'id' => 1164,
                'name' => '福建中医药大学',
                'city' => '福州市',
                'code' => '4135010393',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            164 => 
            array (
                'id' => 1165,
                'name' => '福建师范大学',
                'city' => '福州市',
                'code' => '4135010394',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            165 => 
            array (
                'id' => 1166,
                'name' => '闽江学院',
                'city' => '福州市',
                'code' => '4135010395',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            166 => 
            array (
                'id' => 1167,
                'name' => '武夷学院',
                'city' => '南平市',
                'code' => '4135010397',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            167 => 
            array (
                'id' => 1168,
                'name' => '宁德师范学院',
                'city' => '宁德市',
                'code' => '4135010398',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            168 => 
            array (
                'id' => 1169,
                'name' => '泉州师范学院',
                'city' => '泉州市',
                'code' => '4135010399',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 1170,
                'name' => '闽南师范大学',
                'city' => '漳州市',
                'code' => '4135010402',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 1171,
                'name' => '厦门理工学院',
                'city' => '厦门市',
                'code' => '4135011062',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            171 => 
            array (
                'id' => 1172,
                'name' => '三明学院',
                'city' => '三明市',
                'code' => '4135011311',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            172 => 
            array (
                'id' => 1173,
                'name' => '龙岩学院',
                'city' => '龙岩市',
                'code' => '4135011312',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            173 => 
            array (
                'id' => 1174,
                'name' => '福建商学院',
                'city' => '福州市',
                'code' => '4135011313',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            174 => 
            array (
                'id' => 1175,
                'name' => '福建警察学院',
                'city' => '福州市',
                'code' => '4135011495',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            175 => 
            array (
                'id' => 1176,
                'name' => '莆田学院',
                'city' => '莆田市',
                'code' => '4135011498',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            176 => 
            array (
                'id' => 1177,
                'name' => '仰恩大学',
                'city' => '泉州市',
                'code' => '4135011784',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            177 => 
            array (
                'id' => 1178,
                'name' => '厦门医学院',
                'city' => '厦门市',
                'code' => '4135012631',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 1179,
                'name' => '厦门华厦学院',
                'city' => '厦门市',
                'code' => '4135012709',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            179 => 
            array (
                'id' => 1180,
                'name' => '闽南理工学院',
                'city' => '泉州市',
                'code' => '4135012710',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            180 => 
            array (
                'id' => 1181,
                'name' => '泉州职业技术大学',
                'city' => '泉州市',
                'code' => '4135012928',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            181 => 
            array (
                'id' => 1182,
                'name' => '闽南科技学院',
                'city' => '泉州市',
                'code' => '4135012992',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            182 => 
            array (
                'id' => 1183,
                'name' => '福州工商学院',
                'city' => '福州市',
                'code' => '4135012993',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            183 => 
            array (
                'id' => 1184,
                'name' => '厦门工学院',
                'city' => '厦门市',
                'code' => '4135013115',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            184 => 
            array (
                'id' => 1185,
                'name' => '阳光学院',
                'city' => '福州市',
                'code' => '4135013468',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            185 => 
            array (
                'id' => 1186,
                'name' => '厦门大学嘉庚学院',
                'city' => '漳州市',
                'code' => '4135013469',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            186 => 
            array (
                'id' => 1187,
                'name' => '福州大学至诚学院',
                'city' => '福州市',
                'code' => '4135013470',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            187 => 
            array (
                'id' => 1188,
                'name' => '集美大学诚毅学院',
                'city' => '厦门市',
                'code' => '4135013471',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            188 => 
            array (
                'id' => 1189,
                'name' => '福建师范大学协和学院',
                'city' => '福州市',
                'code' => '4135013472',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            189 => 
            array (
                'id' => 1190,
                'name' => '福州外语外贸学院',
                'city' => '福州市',
                'code' => '4135013762',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            190 => 
            array (
                'id' => 1191,
                'name' => '福建江夏学院',
                'city' => '福州市',
                'code' => '4135013763',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            191 => 
            array (
                'id' => 1192,
                'name' => '泉州信息工程学院',
                'city' => '泉州市',
                'code' => '4135013766',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            192 => 
            array (
                'id' => 1193,
                'name' => '福州理工学院',
                'city' => '福州市',
                'code' => '4135013773',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            193 => 
            array (
                'id' => 1194,
                'name' => '福建农林大学金山学院',
                'city' => '福州市',
                'code' => '4135014046',
                'supervisor' => '福建省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            194 => 
            array (
                'id' => 1195,
                'name' => '福建技术师范学院',
                'city' => '福州市',
                'code' => '4135014683',
                'supervisor' => '福建省',
                'level' => '本科',
                'type' => '公办',
            ),
            195 => 
            array (
                'id' => 1196,
                'name' => '福建船政交通职业学院',
                'city' => '福州市',
                'code' => '4135010866',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            196 => 
            array (
                'id' => 1197,
                'name' => '漳州职业技术学院',
                'city' => '漳州市',
                'code' => '4135011314',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            197 => 
            array (
                'id' => 1198,
                'name' => '闽西职业技术学院',
                'city' => '龙岩市',
                'code' => '4135011315',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            198 => 
            array (
                'id' => 1199,
                'name' => '黎明职业大学',
                'city' => '泉州市',
                'code' => '4135011317',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            199 => 
            array (
                'id' => 1200,
                'name' => '福建华南女子职业学院',
                'city' => '福州市',
                'code' => '4135011499',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            200 => 
            array (
                'id' => 1201,
                'name' => '福州职业技术学院',
                'city' => '福州市',
                'code' => '4135011502',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            201 => 
            array (
                'id' => 1202,
                'name' => '福建林业职业技术学院',
                'city' => '南平市',
                'code' => '4135012625',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            202 => 
            array (
                'id' => 1203,
                'name' => '福建信息职业技术学院',
                'city' => '福州市',
                'code' => '4135012626',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            203 => 
            array (
                'id' => 1204,
                'name' => '福建水利电力职业技术学院',
                'city' => '三明市',
                'code' => '4135012627',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            204 => 
            array (
                'id' => 1205,
                'name' => '福建电力职业技术学院',
                'city' => '泉州市',
                'code' => '4135012628',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            205 => 
            array (
                'id' => 1206,
                'name' => '厦门海洋职业技术学院',
                'city' => '厦门市',
                'code' => '4135012629',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            206 => 
            array (
                'id' => 1207,
                'name' => '福建农业职业技术学院',
                'city' => '福州市',
                'code' => '4135012630',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            207 => 
            array (
                'id' => 1208,
                'name' => '福建卫生职业技术学院',
                'city' => '福州市',
                'code' => '4135012633',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            208 => 
            array (
                'id' => 1209,
                'name' => '泉州医学高等专科学校',
                'city' => '泉州市',
                'code' => '4135012634',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            209 => 
            array (
                'id' => 1210,
                'name' => '福州英华职业学院',
                'city' => '福州市',
                'code' => '4135012708',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            210 => 
            array (
                'id' => 1211,
                'name' => '泉州纺织服装职业学院',
                'city' => '泉州市',
                'code' => '4135012711',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            211 => 
            array (
                'id' => 1212,
                'name' => '泉州华光职业学院',
                'city' => '泉州市',
                'code' => '4135012927',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            212 => 
            array (
                'id' => 1213,
                'name' => '闽北职业技术学院',
                'city' => '南平市',
                'code' => '4135013764',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            213 => 
            array (
                'id' => 1214,
                'name' => '福州黎明职业技术学院',
                'city' => '福州市',
                'code' => '4135013765',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            214 => 
            array (
                'id' => 1215,
                'name' => '厦门演艺职业学院',
                'city' => '厦门市',
                'code' => '4135013767',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            215 => 
            array (
                'id' => 1216,
                'name' => '厦门华天涉外职业技术学院',
                'city' => '厦门市',
                'code' => '4135013768',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            216 => 
            array (
                'id' => 1217,
                'name' => '福州科技职业技术学院',
                'city' => '福州市',
                'code' => '4135013769',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            217 => 
            array (
                'id' => 1218,
                'name' => '泉州经贸职业技术学院',
                'city' => '泉州市',
                'code' => '4135013770',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            218 => 
            array (
                'id' => 1219,
                'name' => '福建对外经济贸易职业技术学院',
                'city' => '福州市',
                'code' => '4135013771',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            219 => 
            array (
                'id' => 1220,
                'name' => '湄洲湾职业技术学院',
                'city' => '莆田市',
                'code' => '4135013772',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            220 => 
            array (
                'id' => 1221,
                'name' => '福建生物工程职业技术学院',
                'city' => '福州市',
                'code' => '4135013969',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            221 => 
            array (
                'id' => 1222,
                'name' => '福建艺术职业学院',
                'city' => '福州市',
                'code' => '4135013970',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            222 => 
            array (
                'id' => 1223,
                'name' => '福建幼儿师范高等专科学校',
                'city' => '福州市',
                'code' => '4135013972',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            223 => 
            array (
                'id' => 1224,
                'name' => '厦门城市职业学院',
                'city' => '厦门市',
                'code' => '4135013973',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            224 => 
            array (
                'id' => 1225,
                'name' => '泉州工艺美术职业学院',
                'city' => '泉州市',
                'code' => '4135013975',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            225 => 
            array (
                'id' => 1226,
                'name' => '三明医学科技职业学院',
                'city' => '三明市',
                'code' => '4135013976',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            226 => 
            array (
                'id' => 1227,
                'name' => '宁德职业技术学院',
                'city' => '宁德市',
                'code' => '4135013977',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            227 => 
            array (
                'id' => 1228,
                'name' => '福州软件职业技术学院',
                'city' => '福州市',
                'code' => '4135013978',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            228 => 
            array (
                'id' => 1229,
                'name' => '厦门兴才职业技术学院',
                'city' => '厦门市',
                'code' => '4135013979',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            229 => 
            array (
                'id' => 1230,
                'name' => '厦门软件职业技术学院',
                'city' => '厦门市',
                'code' => '4135014059',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            230 => 
            array (
                'id' => 1231,
                'name' => '福建体育职业技术学院',
                'city' => '福州市',
                'code' => '4135014060',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 1232,
                'name' => '漳州城市职业学院',
                'city' => '漳州市',
                'code' => '4135014110',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 1233,
                'name' => '厦门南洋职业学院',
                'city' => '厦门市',
                'code' => '4135014111',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            233 => 
            array (
                'id' => 1234,
                'name' => '厦门东海职业技术学院',
                'city' => '厦门市',
                'code' => '4135014112',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            234 => 
            array (
                'id' => 1235,
                'name' => '漳州科技职业学院',
                'city' => '漳州市',
                'code' => '4135014113',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            235 => 
            array (
                'id' => 1236,
                'name' => '漳州理工职业学院',
                'city' => '漳州市',
                'code' => '4135014115',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            236 => 
            array (
                'id' => 1237,
                'name' => '武夷山职业学院',
                'city' => '南平市',
                'code' => '4135014116',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            237 => 
            array (
                'id' => 1238,
                'name' => '漳州卫生职业学院',
                'city' => '漳州市',
                'code' => '4135014117',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            238 => 
            array (
                'id' => 1239,
                'name' => '泉州海洋职业学院',
                'city' => '泉州市',
                'code' => '4135014231',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            239 => 
            array (
                'id' => 1240,
                'name' => '泉州轻工职业学院',
                'city' => '泉州市',
                'code' => '4135014232',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            240 => 
            array (
                'id' => 1241,
                'name' => '厦门安防科技职业学院',
                'city' => '厦门市',
                'code' => '4135014257',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            241 => 
            array (
                'id' => 1242,
                'name' => '泉州幼儿师范高等专科学校',
                'city' => '泉州市',
                'code' => '4135014331',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            242 => 
            array (
                'id' => 1243,
                'name' => '闽江师范高等专科学校',
                'city' => '福州市',
                'code' => '4135014490',
                'supervisor' => '福建省',
                'level' => '专科',
                'type' => '公办',
            ),
            243 => 
            array (
                'id' => 1244,
                'name' => '泉州工程职业技术学院',
                'city' => '泉州市',
                'code' => '4135014503',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            244 => 
            array (
                'id' => 1245,
                'name' => '福州墨尔本理工职业学院',
                'city' => '福州市',
                'code' => '4135016411',
                'supervisor' => '福建省教育厅',
                'level' => '专科',
                'type' => '公办',
            ),
            245 => 
            array (
                'id' => 1246,
                'name' => '南昌大学',
                'city' => '南昌市',
                'code' => '4136010403',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            246 => 
            array (
                'id' => 1247,
                'name' => '华东交通大学',
                'city' => '南昌市',
                'code' => '4136010404',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            247 => 
            array (
                'id' => 1248,
                'name' => '东华理工大学',
                'city' => '抚州市',
                'code' => '4136010405',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 1249,
                'name' => '南昌航空大学',
                'city' => '南昌市',
                'code' => '4136010406',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 1250,
                'name' => '江西理工大学',
                'city' => '赣州市',
                'code' => '4136010407',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            250 => 
            array (
                'id' => 1251,
                'name' => '景德镇陶瓷大学',
                'city' => '景德镇市',
                'code' => '4136010408',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            251 => 
            array (
                'id' => 1252,
                'name' => '江西农业大学',
                'city' => '南昌市',
                'code' => '4136010410',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            252 => 
            array (
                'id' => 1253,
                'name' => '江西中医药大学',
                'city' => '南昌市',
                'code' => '4136010412',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 1254,
                'name' => '赣南医学院',
                'city' => '赣州市',
                'code' => '4136010413',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 1255,
                'name' => '江西师范大学',
                'city' => '南昌市',
                'code' => '4136010414',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            255 => 
            array (
                'id' => 1256,
                'name' => '上饶师范学院',
                'city' => '上饶市',
                'code' => '4136010416',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            256 => 
            array (
                'id' => 1257,
                'name' => '宜春学院',
                'city' => '宜春市',
                'code' => '4136010417',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            257 => 
            array (
                'id' => 1258,
                'name' => '赣南师范大学',
                'city' => '赣州市',
                'code' => '4136010418',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            258 => 
            array (
                'id' => 1259,
                'name' => '井冈山大学',
                'city' => '吉安市',
                'code' => '4136010419',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            259 => 
            array (
                'id' => 1260,
                'name' => '江西财经大学',
                'city' => '南昌市',
                'code' => '4136010421',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            260 => 
            array (
                'id' => 1261,
                'name' => '江西科技学院',
                'city' => '南昌市',
                'code' => '4136010846',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            261 => 
            array (
                'id' => 1262,
                'name' => '景德镇学院',
                'city' => '景德镇市',
                'code' => '4136010894',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            262 => 
            array (
                'id' => 1263,
                'name' => '萍乡学院',
                'city' => '萍乡市',
                'code' => '4136010895',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            263 => 
            array (
                'id' => 1264,
                'name' => '江西科技师范大学',
                'city' => '南昌市',
                'code' => '4136011318',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 1265,
                'name' => '南昌工程学院',
                'city' => '南昌市',
                'code' => '4136011319',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            265 => 
            array (
                'id' => 1266,
                'name' => '江西警察学院',
                'city' => '南昌市',
                'code' => '4136011504',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 1267,
                'name' => '新余学院',
                'city' => '新余市',
                'code' => '4136011508',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 1268,
                'name' => '九江学院',
                'city' => '九江市',
                'code' => '4136011843',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            268 => 
            array (
                'id' => 1269,
                'name' => '江西工程学院',
                'city' => '新余市',
                'code' => '4136012766',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            269 => 
            array (
                'id' => 1270,
                'name' => '南昌理工学院',
                'city' => '南昌市',
                'code' => '4136012795',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            270 => 
            array (
                'id' => 1271,
                'name' => '江西应用科技学院',
                'city' => '南昌市',
                'code' => '4136012938',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            271 => 
            array (
                'id' => 1272,
                'name' => '江西服装学院',
                'city' => '南昌市',
                'code' => '4136013418',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            272 => 
            array (
                'id' => 1273,
                'name' => '南昌职业大学',
                'city' => '南昌市',
                'code' => '4136013420',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            273 => 
            array (
                'id' => 1274,
                'name' => '南昌工学院',
                'city' => '南昌市',
                'code' => '4136013421',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            274 => 
            array (
                'id' => 1275,
                'name' => '南昌大学科学技术学院',
                'city' => '南昌市',
                'code' => '4136013429',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            275 => 
            array (
                'id' => 1276,
                'name' => '南昌大学共青学院',
                'city' => '九江市',
                'code' => '4136013430',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            276 => 
            array (
                'id' => 1277,
                'name' => '华东交通大学理工学院',
                'city' => '南昌市',
                'code' => '4136013431',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            277 => 
            array (
                'id' => 1278,
                'name' => '东华理工大学长江学院',
                'city' => '抚州市',
                'code' => '4136013432',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            278 => 
            array (
                'id' => 1279,
                'name' => '南昌航空大学科技学院',
                'city' => '南昌市',
                'code' => '4136013433',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            279 => 
            array (
                'id' => 1280,
                'name' => '江西理工大学应用科学学院',
                'city' => '赣州市',
                'code' => '4136013434',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            280 => 
            array (
                'id' => 1281,
                'name' => '景德镇陶瓷大学科技艺术学院',
                'city' => '景德镇市',
                'code' => '4136013435',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            281 => 
            array (
                'id' => 1282,
                'name' => '江西农业大学南昌商学院',
                'city' => '南昌市',
                'code' => '4136013436',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            282 => 
            array (
                'id' => 1283,
                'name' => '江西中医药大学科技学院',
                'city' => '南昌市',
                'code' => '4136013437',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            283 => 
            array (
                'id' => 1284,
                'name' => '江西师范大学科学技术学院',
                'city' => '南昌市',
                'code' => '4136013438',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            284 => 
            array (
                'id' => 1285,
                'name' => '赣南师范大学科技学院',
                'city' => '赣州市',
                'code' => '4136013439',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            285 => 
            array (
                'id' => 1286,
                'name' => '江西科技师范大学理工学院',
                'city' => '南昌市',
                'code' => '4136013440',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            286 => 
            array (
                'id' => 1287,
                'name' => '江西财经大学现代经济管理学院',
                'city' => '南昌市',
                'code' => '4136013441',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            287 => 
            array (
                'id' => 1288,
                'name' => '豫章师范学院',
                'city' => '南昌市',
                'code' => '4136013774',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            288 => 
            array (
                'id' => 1289,
                'name' => '江西软件职业技术大学',
                'city' => '南昌市',
                'code' => '4136013776',
                'supervisor' => '江西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            289 => 
            array (
                'id' => 1290,
                'name' => '南昌师范学院',
                'city' => '南昌市',
                'code' => '4136014437',
                'supervisor' => '江西省',
                'level' => '本科',
                'type' => '公办',
            ),
            290 => 
            array (
                'id' => 1291,
                'name' => '上饶幼儿师范高等专科学校',
                'city' => '上饶市',
                'code' => '3636000312',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            291 => 
            array (
                'id' => 1292,
                'name' => '抚州幼儿师范高等专科学校',
                'city' => '抚州市',
                'code' => '3636000519',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            292 => 
            array (
                'id' => 1293,
                'name' => '江西工业职业技术学院',
                'city' => '南昌市',
                'code' => '4136010839',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            293 => 
            array (
                'id' => 1294,
                'name' => '江西医学高等专科学校',
                'city' => '上饶市',
                'code' => '4136010888',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            294 => 
            array (
                'id' => 1295,
                'name' => '九江职业大学',
                'city' => '九江市',
                'code' => '4136011505',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            295 => 
            array (
                'id' => 1296,
                'name' => '九江职业技术学院',
                'city' => '九江市',
                'code' => '4136011785',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            296 => 
            array (
                'id' => 1297,
                'name' => '江西司法警官职业学院',
                'city' => '南昌市',
                'code' => '4136012929',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            297 => 
            array (
                'id' => 1298,
                'name' => '江西陶瓷工艺美术职业技术学院',
                'city' => '景德镇市',
                'code' => '4136012930',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            298 => 
            array (
                'id' => 1299,
                'name' => '江西旅游商贸职业学院',
                'city' => '南昌市',
                'code' => '4136012932',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            299 => 
            array (
                'id' => 1300,
                'name' => '江西电力职业技术学院',
                'city' => '南昌市',
                'code' => '4136012933',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            300 => 
            array (
                'id' => 1301,
                'name' => '江西环境工程职业学院',
                'city' => '赣州市',
                'code' => '4136012934',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            301 => 
            array (
                'id' => 1302,
                'name' => '江西艺术职业学院',
                'city' => '南昌市',
                'code' => '4136012936',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            302 => 
            array (
                'id' => 1303,
                'name' => '鹰潭职业技术学院',
                'city' => '鹰潭市',
                'code' => '4136012937',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            303 => 
            array (
                'id' => 1304,
                'name' => '江西信息应用职业技术学院',
                'city' => '南昌市',
                'code' => '4136012939',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            304 => 
            array (
                'id' => 1305,
                'name' => '江西交通职业技术学院',
                'city' => '南昌市',
                'code' => '4136012940',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            305 => 
            array (
                'id' => 1306,
                'name' => '江西财经职业学院',
                'city' => '九江市',
                'code' => '4136012941',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            306 => 
            array (
                'id' => 1307,
                'name' => '江西应用技术职业学院',
                'city' => '赣州市',
                'code' => '4136012942',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            307 => 
            array (
                'id' => 1308,
                'name' => '江西现代职业技术学院',
                'city' => '南昌市',
                'code' => '4136012943',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            308 => 
            array (
                'id' => 1309,
                'name' => '江西工业工程职业技术学院',
                'city' => '萍乡市',
                'code' => '4136012944',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            309 => 
            array (
                'id' => 1310,
                'name' => '江西机电职业技术学院',
                'city' => '南昌市',
                'code' => '4136012976',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            310 => 
            array (
                'id' => 1311,
                'name' => '江西科技职业学院',
                'city' => '南昌市',
                'code' => '4136013419',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            311 => 
            array (
                'id' => 1312,
                'name' => '江西外语外贸职业学院',
                'city' => '南昌市',
                'code' => '4136013422',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            312 => 
            array (
                'id' => 1313,
                'name' => '江西工业贸易职业技术学院',
                'city' => '南昌市',
                'code' => '4136013423',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            313 => 
            array (
                'id' => 1314,
                'name' => '宜春职业技术学院',
                'city' => '宜春市',
                'code' => '4136013424',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            314 => 
            array (
                'id' => 1315,
                'name' => '江西应用工程职业学院',
                'city' => '萍乡市',
                'code' => '4136013425',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            315 => 
            array (
                'id' => 1316,
                'name' => '江西生物科技职业学院',
                'city' => '南昌市',
                'code' => '4136013426',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            316 => 
            array (
                'id' => 1317,
                'name' => '江西建设职业技术学院',
                'city' => '南昌市',
                'code' => '4136013427',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            317 => 
            array (
                'id' => 1318,
                'name' => '抚州职业技术学院',
                'city' => '抚州市',
                'code' => '4136013428',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            318 => 
            array (
                'id' => 1319,
                'name' => '江西中医药高等专科学校',
                'city' => '抚州市',
                'code' => '4136013775',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            319 => 
            array (
                'id' => 1320,
                'name' => '江西经济管理职业学院',
                'city' => '南昌市',
                'code' => '4136013866',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            320 => 
            array (
                'id' => 1321,
                'name' => '江西制造职业技术学院',
                'city' => '南昌市',
                'code' => '4136013867',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            321 => 
            array (
                'id' => 1322,
                'name' => '江西工程职业学院',
                'city' => '南昌市',
                'code' => '4136013868',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            322 => 
            array (
                'id' => 1323,
                'name' => '江西青年职业学院',
                'city' => '南昌市',
                'code' => '4136013869',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            323 => 
            array (
                'id' => 1324,
                'name' => '上饶职业技术学院',
                'city' => '上饶市',
                'code' => '4136013870',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            324 => 
            array (
                'id' => 1325,
                'name' => '江西航空职业技术学院',
                'city' => '南昌市',
                'code' => '4136013871',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            325 => 
            array (
                'id' => 1326,
                'name' => '江西农业工程职业学院',
                'city' => '宜春市',
                'code' => '4136013872',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            326 => 
            array (
                'id' => 1327,
                'name' => '赣西科技职业学院',
                'city' => '新余市',
                'code' => '4136013873',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            327 => 
            array (
                'id' => 1328,
                'name' => '江西卫生职业学院',
                'city' => '南昌市',
                'code' => '4136013965',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            328 => 
            array (
                'id' => 1329,
                'name' => '江西新能源科技职业学院',
                'city' => '新余市',
                'code' => '4136014166',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            329 => 
            array (
                'id' => 1330,
                'name' => '江西枫林涉外经贸职业学院',
                'city' => '九江市',
                'code' => '4136014167',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            330 => 
            array (
                'id' => 1331,
                'name' => '江西泰豪动漫职业学院',
                'city' => '南昌市',
                'code' => '4136014168',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            331 => 
            array (
                'id' => 1332,
                'name' => '江西冶金职业技术学院',
                'city' => '新余市',
                'code' => '4136014241',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            332 => 
            array (
                'id' => 1333,
                'name' => '江西管理职业学院',
                'city' => '南昌市',
                'code' => '4136014249',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            333 => 
            array (
                'id' => 1334,
                'name' => '江西传媒职业学院',
                'city' => '南昌市',
                'code' => '4136014250',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            334 => 
            array (
                'id' => 1335,
                'name' => '江西工商职业技术学院',
                'city' => '南昌市',
                'code' => '4136014321',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            335 => 
            array (
                'id' => 1336,
                'name' => '景德镇陶瓷职业技术学院',
                'city' => '景德镇市',
                'code' => '4136014402',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            336 => 
            array (
                'id' => 1337,
                'name' => '共青科技职业学院',
                'city' => '九江市',
                'code' => '4136014403',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            337 => 
            array (
                'id' => 1338,
                'name' => '赣州师范高等专科学校',
                'city' => '赣州市',
                'code' => '4136014465',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            338 => 
            array (
                'id' => 1339,
                'name' => '江西水利职业学院',
                'city' => '南昌市',
                'code' => '4136014476',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            339 => 
            array (
                'id' => 1340,
                'name' => '宜春幼儿师范高等专科学校',
                'city' => '宜春市',
                'code' => '4136014494',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            340 => 
            array (
                'id' => 1341,
                'name' => '吉安职业技术学院',
                'city' => '吉安市',
                'code' => '4136014504',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            341 => 
            array (
                'id' => 1342,
                'name' => '江西洪州职业学院',
                'city' => '宜春市',
                'code' => '4136014505',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            342 => 
            array (
                'id' => 1343,
                'name' => '江西师范高等专科学校',
                'city' => '鹰潭市',
                'code' => '4136014537',
                'supervisor' => '江西省       ',
                'level' => '专科',
                'type' => '公办',
            ),
            343 => 
            array (
                'id' => 1344,
                'name' => '南昌影视传播职业学院',
                'city' => '南昌市',
                'code' => '4136014544',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            344 => 
            array (
                'id' => 1345,
                'name' => '赣南卫生健康职业学院',
                'city' => '赣州市',
                'code' => '4136014569',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            345 => 
            array (
                'id' => 1346,
                'name' => '萍乡卫生职业学院',
                'city' => '萍乡市',
                'code' => '4136014656',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            346 => 
            array (
                'id' => 1347,
                'name' => '江西婺源茶业职业学院',
                'city' => '上饶市',
                'code' => '4136014657',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            347 => 
            array (
                'id' => 1348,
                'name' => '赣州职业技术学院',
                'city' => '赣州市',
                'code' => '4136014665',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            348 => 
            array (
                'id' => 1349,
                'name' => '南昌健康职业技术学院',
                'city' => '南昌市',
                'code' => '4136014705',
                'supervisor' => '江西省',
                'level' => '专科',
                'type' => '公办',
            ),
            349 => 
            array (
                'id' => 1350,
                'name' => '九江理工职业学院',
                'city' => '九江市',
                'code' => '4136014706',
                'supervisor' => '江西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            350 => 
            array (
                'id' => 1351,
                'name' => '中国人民解放军陆军步兵学院',
                'city' => '南昌市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'name' => '山东大学',
                'city' => '济南市',
                'code' => '4137010422',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            352 => 
            array (
                'id' => 1353,
                'name' => '中国海洋大学',
                'city' => '青岛市',
                'code' => '4137010423',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            353 => 
            array (
                'id' => 1354,
                'name' => '山东科技大学',
                'city' => '青岛市',
                'code' => '4137010424',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            354 => 
            array (
                'id' => 1355,
                'name' => '中国石油大学（华东）',
                'city' => '青岛市',
                'code' => '4137010425',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            355 => 
            array (
                'id' => 1356,
                'name' => '青岛科技大学',
                'city' => '青岛市',
                'code' => '4137010426',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            356 => 
            array (
                'id' => 1357,
                'name' => '济南大学',
                'city' => '济南市',
                'code' => '4137010427',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            357 => 
            array (
                'id' => 1358,
                'name' => '青岛理工大学',
                'city' => '青岛市',
                'code' => '4137010429',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            358 => 
            array (
                'id' => 1359,
                'name' => '山东建筑大学',
                'city' => '济南市',
                'code' => '4137010430',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            359 => 
            array (
                'id' => 1360,
                'name' => '齐鲁工业大学',
                'city' => '济南市',
                'code' => '4137010431',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            360 => 
            array (
                'id' => 1361,
                'name' => '山东理工大学',
                'city' => '淄博市',
                'code' => '4137010433',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            361 => 
            array (
                'id' => 1362,
                'name' => '山东农业大学',
                'city' => '泰安市',
                'code' => '4137010434',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            362 => 
            array (
                'id' => 1363,
                'name' => '青岛农业大学',
                'city' => '青岛市',
                'code' => '4137010435',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            363 => 
            array (
                'id' => 1364,
                'name' => '潍坊医学院',
                'city' => '潍坊市',
                'code' => '4137010438',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            364 => 
            array (
                'id' => 1365,
                'name' => '山东第一医科大学',
                'city' => '济南市',
                'code' => '4137010439',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            365 => 
            array (
                'id' => 1366,
                'name' => '滨州医学院',
                'city' => '滨州市',
                'code' => '4137010440',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            366 => 
            array (
                'id' => 1367,
                'name' => '山东中医药大学',
                'city' => '济南市',
                'code' => '4137010441',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            367 => 
            array (
                'id' => 1368,
                'name' => '济宁医学院',
                'city' => '济宁市',
                'code' => '4137010443',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            368 => 
            array (
                'id' => 1369,
                'name' => '山东师范大学',
                'city' => '济南市',
                'code' => '4137010445',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            369 => 
            array (
                'id' => 1370,
                'name' => '曲阜师范大学',
                'city' => '济宁市',
                'code' => '4137010446',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            370 => 
            array (
                'id' => 1371,
                'name' => '聊城大学',
                'city' => '聊城市',
                'code' => '4137010447',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            371 => 
            array (
                'id' => 1372,
                'name' => '德州学院',
                'city' => '德州市',
                'code' => '4137010448',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            372 => 
            array (
                'id' => 1373,
                'name' => '滨州学院',
                'city' => '滨州市',
                'code' => '4137010449',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            373 => 
            array (
                'id' => 1374,
                'name' => '鲁东大学',
                'city' => '烟台市',
                'code' => '4137010451',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            374 => 
            array (
                'id' => 1375,
                'name' => '临沂大学',
                'city' => '临沂市',
                'code' => '4137010452',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            375 => 
            array (
                'id' => 1376,
                'name' => '泰山学院',
                'city' => '泰安市',
                'code' => '4137010453',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            376 => 
            array (
                'id' => 1377,
                'name' => '济宁学院',
                'city' => '济宁市',
                'code' => '4137010454',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            377 => 
            array (
                'id' => 1378,
                'name' => '菏泽学院',
                'city' => '菏泽市',
                'code' => '4137010455',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            378 => 
            array (
                'id' => 1379,
                'name' => '山东财经大学',
                'city' => '济南市',
                'code' => '4137010456',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            379 => 
            array (
                'id' => 1380,
                'name' => '山东体育学院',
                'city' => '济南市',
                'code' => '4137010457',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            380 => 
            array (
                'id' => 1381,
                'name' => '山东艺术学院',
                'city' => '济南市',
                'code' => '4137010458',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            381 => 
            array (
                'id' => 1382,
                'name' => '齐鲁医药学院',
                'city' => '淄博市',
                'code' => '4137010825',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            382 => 
            array (
                'id' => 1383,
                'name' => '青岛滨海学院',
                'city' => '青岛市',
                'code' => '4137010868',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            383 => 
            array (
                'id' => 1384,
                'name' => '枣庄学院',
                'city' => '枣庄市',
                'code' => '4137010904',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            384 => 
            array (
                'id' => 1385,
                'name' => '山东工艺美术学院',
                'city' => '济南市',
                'code' => '4137010908',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            385 => 
            array (
                'id' => 1386,
                'name' => '青岛大学',
                'city' => '青岛市',
                'code' => '4137011065',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            386 => 
            array (
                'id' => 1387,
                'name' => '烟台大学',
                'city' => '烟台市',
                'code' => '4137011066',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            387 => 
            array (
                'id' => 1388,
                'name' => '潍坊学院',
                'city' => '潍坊市',
                'code' => '4137011067',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            388 => 
            array (
                'id' => 1389,
                'name' => '山东警察学院',
                'city' => '济南市',
                'code' => '4137011324',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            389 => 
            array (
                'id' => 1390,
                'name' => '山东交通学院',
                'city' => '济南市',
                'code' => '4137011510',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            390 => 
            array (
                'id' => 1391,
                'name' => '山东工商学院',
                'city' => '烟台市',
                'code' => '4137011688',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            391 => 
            array (
                'id' => 1392,
                'name' => '山东女子学院',
                'city' => '济南市',
                'code' => '4137012331',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            392 => 
            array (
                'id' => 1393,
                'name' => '烟台南山学院',
                'city' => '烟台市',
                'code' => '4137012332',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            393 => 
            array (
                'id' => 1394,
                'name' => '潍坊科技学院',
                'city' => '潍坊市',
                'code' => '4137012843',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            394 => 
            array (
                'id' => 1395,
                'name' => '山东英才学院',
                'city' => '济南市',
                'code' => '4137013006',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            395 => 
            array (
                'id' => 1396,
                'name' => '青岛恒星科技学院',
                'city' => '青岛市',
                'code' => '4137013015',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            396 => 
            array (
                'id' => 1397,
                'name' => '青岛黄海学院',
                'city' => '青岛市',
                'code' => '4137013320',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            397 => 
            array (
                'id' => 1398,
                'name' => '山东现代学院',
                'city' => '济南市',
                'code' => '4137013322',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            398 => 
            array (
                'id' => 1399,
                'name' => '山东协和学院',
                'city' => '济南市',
                'code' => '4137013324',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            399 => 
            array (
                'id' => 1400,
                'name' => '山东工程职业技术大学',
                'city' => '济南市',
                'code' => '4137013356',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            400 => 
            array (
                'id' => 1401,
                'name' => '烟台大学文经学院',
                'city' => '烟台市',
                'code' => '4137013359',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            401 => 
            array (
                'id' => 1402,
                'name' => '聊城大学东昌学院',
                'city' => '聊城市',
                'code' => '4137013373',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            402 => 
            array (
                'id' => 1403,
                'name' => '青岛理工大学琴岛学院',
                'city' => '青岛市',
                'code' => '4137013378',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            403 => 
            array (
                'id' => 1404,
                'name' => '潍坊理工学院',
                'city' => '潍坊市',
                'code' => '4137013379',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            404 => 
            array (
                'id' => 1405,
                'name' => '山东财经大学燕山学院',
                'city' => '济南市',
                'code' => '4137013383',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            405 => 
            array (
                'id' => 1406,
                'name' => '中国石油大学胜利学院',
                'city' => '东营市',
                'code' => '4137013386',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            406 => 
            array (
                'id' => 1407,
                'name' => '山东外国语职业技术大学',
                'city' => '日照市',
                'code' => '4137013387',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            407 => 
            array (
                'id' => 1408,
                'name' => '山东科技大学泰山科技学院',
                'city' => '泰安市',
                'code' => '4137013624',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            408 => 
            array (
                'id' => 1409,
                'name' => '山东华宇工学院',
                'city' => '德州市',
                'code' => '4137013857',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            409 => 
            array (
                'id' => 1410,
                'name' => '山东外事职业大学',
                'city' => '威海市',
                'code' => '4137013874',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            410 => 
            array (
                'id' => 1411,
                'name' => '青岛工学院',
                'city' => '青岛市',
                'code' => '4137013995',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            411 => 
            array (
                'id' => 1412,
                'name' => '青岛农业大学海都学院',
                'city' => '烟台市',
                'code' => '4137013997',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            412 => 
            array (
                'id' => 1413,
                'name' => '齐鲁理工学院',
                'city' => '济南市',
                'code' => '4137013998',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            413 => 
            array (
                'id' => 1414,
                'name' => '山东财经大学东方学院',
                'city' => '泰安市',
                'code' => '4137013999',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            414 => 
            array (
                'id' => 1415,
                'name' => '济南大学泉城学院',
                'city' => '济南市',
                'code' => '4137014002',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            415 => 
            array (
                'id' => 1416,
                'name' => '山东政法学院',
                'city' => '济南市',
                'code' => '4137014100',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            416 => 
            array (
                'id' => 1417,
                'name' => '齐鲁师范学院',
                'city' => '济南市',
                'code' => '4137014276',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            417 => 
            array (
                'id' => 1418,
                'name' => '山东青年政治学院',
                'city' => '济南市',
                'code' => '4137014277',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            418 => 
            array (
                'id' => 1419,
                'name' => '北京电影学院现代创意媒体学院',
                'city' => '青岛市',
                'code' => '4137014327',
                'supervisor' => '山东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            419 => 
            array (
                'id' => 1420,
                'name' => '山东管理学院',
                'city' => '济南市',
                'code' => '4137014438',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            420 => 
            array (
                'id' => 1421,
                'name' => '山东农业工程学院',
                'city' => '济南市',
                'code' => '4137014439',
                'supervisor' => '山东省',
                'level' => '本科',
                'type' => '公办',
            ),
            421 => 
            array (
                'id' => 1422,
                'name' => '山东医学高等专科学校',
                'city' => '临沂市',
                'code' => '4137010442',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            422 => 
            array (
                'id' => 1423,
                'name' => '菏泽医学专科学校',
                'city' => '菏泽市',
                'code' => '4137010444',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            423 => 
            array (
                'id' => 1424,
                'name' => '山东商业职业技术学院',
                'city' => '济南市',
                'code' => '4137010832',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            424 => 
            array (
                'id' => 1425,
                'name' => '山东电力高等专科学校',
                'city' => '济南市',
                'code' => '4137011827',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            425 => 
            array (
                'id' => 1426,
                'name' => '日照职业技术学院',
                'city' => '日照市',
                'code' => '4137012062',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            426 => 
            array (
                'id' => 1427,
                'name' => '曲阜远东职业技术学院',
                'city' => '济宁市',
                'code' => '4137012070',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            427 => 
            array (
                'id' => 1428,
                'name' => '青岛职业技术学院',
                'city' => '青岛市',
                'code' => '4137012324',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            428 => 
            array (
                'id' => 1429,
                'name' => '威海职业学院',
                'city' => '威海市',
                'code' => '4137012326',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            429 => 
            array (
                'id' => 1430,
                'name' => '山东职业学院',
                'city' => '济南市',
                'code' => '4137012328',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            430 => 
            array (
                'id' => 1431,
                'name' => '山东劳动职业技术学院',
                'city' => '济南市',
                'code' => '4137012329',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            431 => 
            array (
                'id' => 1432,
                'name' => '莱芜职业技术学院',
                'city' => '济南市',
                'code' => '4137012330',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            432 => 
            array (
                'id' => 1433,
                'name' => '济宁职业技术学院',
                'city' => '济宁市',
                'code' => '4137012335',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            433 => 
            array (
                'id' => 1434,
                'name' => '潍坊职业学院',
                'city' => '潍坊市',
                'code' => '4137012391',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            434 => 
            array (
                'id' => 1435,
                'name' => '烟台职业学院',
                'city' => '烟台市',
                'code' => '4137012396',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            435 => 
            array (
                'id' => 1436,
                'name' => '东营职业学院',
                'city' => '东营市',
                'code' => '4137012440',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            436 => 
            array (
                'id' => 1437,
                'name' => '聊城职业技术学院',
                'city' => '聊城市',
                'code' => '4137012441',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            437 => 
            array (
                'id' => 1438,
                'name' => '滨州职业学院',
                'city' => '滨州市',
                'code' => '4137012818',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            438 => 
            array (
                'id' => 1439,
                'name' => '山东科技职业学院',
                'city' => '潍坊市',
                'code' => '4137012819',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            439 => 
            array (
                'id' => 1440,
                'name' => '山东服装职业学院',
                'city' => '泰安市',
                'code' => '4137012841',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            440 => 
            array (
                'id' => 1441,
                'name' => '德州科技职业学院',
                'city' => '德州市',
                'code' => '4137012842',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            441 => 
            array (
                'id' => 1442,
                'name' => '山东力明科技职业学院',
                'city' => '泰安市',
                'code' => '4137012844',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            442 => 
            array (
                'id' => 1443,
                'name' => '山东圣翰财贸职业学院',
                'city' => '济南市',
                'code' => '4137012945',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            443 => 
            array (
                'id' => 1444,
                'name' => '山东水利职业学院',
                'city' => '日照市',
                'code' => '4137012946',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            444 => 
            array (
                'id' => 1445,
                'name' => '山东畜牧兽医职业学院',
                'city' => '潍坊市',
                'code' => '4137012947',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            445 => 
            array (
                'id' => 1446,
                'name' => '青岛飞洋职业技术学院',
                'city' => '青岛市',
                'code' => '4137013005',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            446 => 
            array (
                'id' => 1447,
                'name' => '东营科技职业学院',
                'city' => '东营市',
                'code' => '4137013007',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            447 => 
            array (
                'id' => 1448,
                'name' => '山东交通职业学院',
                'city' => '潍坊市',
                'code' => '4137013008',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            448 => 
            array (
                'id' => 1449,
                'name' => '淄博职业学院',
                'city' => '淄博市',
                'code' => '4137013009',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            449 => 
            array (
                'id' => 1450,
                'name' => '山东外贸职业学院',
                'city' => '青岛市',
                'code' => '4137013010',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            450 => 
            array (
                'id' => 1451,
                'name' => '青岛酒店管理职业技术学院',
                'city' => '青岛市',
                'code' => '4137013011',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            451 => 
            array (
                'id' => 1452,
                'name' => '山东信息职业技术学院',
                'city' => '潍坊市',
                'code' => '4137013012',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            452 => 
            array (
                'id' => 1453,
                'name' => '青岛港湾职业技术学院',
                'city' => '青岛市',
                'code' => '4137013014',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            453 => 
            array (
                'id' => 1454,
                'name' => '山东胜利职业学院',
                'city' => '东营市',
                'code' => '4137013316',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            454 => 
            array (
                'id' => 1455,
                'name' => '山东经贸职业学院',
                'city' => '潍坊市',
                'code' => '4137013317',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            455 => 
            array (
                'id' => 1456,
                'name' => '山东工业职业学院',
                'city' => '淄博市',
                'code' => '4137013318',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            456 => 
            array (
                'id' => 1457,
                'name' => '山东化工职业学院',
                'city' => '淄博市',
                'code' => '4137013319',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            457 => 
            array (
                'id' => 1458,
                'name' => '青岛求实职业技术学院',
                'city' => '青岛市',
                'code' => '4137013321',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            458 => 
            array (
                'id' => 1459,
                'name' => '济南职业学院',
                'city' => '济南市',
                'code' => '4137013323',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            459 => 
            array (
                'id' => 1460,
                'name' => '烟台工程职业技术学院',
                'city' => '烟台市',
                'code' => '4137013355',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            460 => 
            array (
                'id' => 1461,
                'name' => '潍坊工商职业学院',
                'city' => '潍坊市',
                'code' => '4137013388',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            461 => 
            array (
                'id' => 1462,
                'name' => '德州职业技术学院',
                'city' => '德州市',
                'code' => '4137013389',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            462 => 
            array (
                'id' => 1463,
                'name' => '枣庄科技职业学院',
                'city' => '枣庄市',
                'code' => '4137013390',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            463 => 
            array (
                'id' => 1464,
                'name' => '淄博师范高等专科学校',
                'city' => '淄博市',
                'code' => '4137013777',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            464 => 
            array (
                'id' => 1465,
                'name' => '山东中医药高等专科学校',
                'city' => '烟台市',
                'code' => '4137013778',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            465 => 
            array (
                'id' => 1466,
                'name' => '济南工程职业技术学院',
                'city' => '济南市',
                'code' => '4137013855',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            466 => 
            array (
                'id' => 1467,
                'name' => '山东电子职业技术学院',
                'city' => '济南市',
                'code' => '4137013856',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            467 => 
            array (
                'id' => 1468,
                'name' => '山东旅游职业学院',
                'city' => '济南市',
                'code' => '4137013858',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            468 => 
            array (
                'id' => 1469,
                'name' => '山东铝业职业学院',
                'city' => '淄博市',
                'code' => '4137013859',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            469 => 
            array (
                'id' => 1470,
                'name' => '山东杏林科技职业学院',
                'city' => '济南市',
                'code' => '4137013860',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            470 => 
            array (
                'id' => 1471,
                'name' => '泰山职业技术学院',
                'city' => '泰安市',
                'code' => '4137013861',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            471 => 
            array (
                'id' => 1472,
                'name' => '山东药品食品职业学院',
                'city' => '威海市',
                'code' => '4137013966',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            472 => 
            array (
                'id' => 1473,
                'name' => '山东商务职业学院',
                'city' => '烟台市',
                'code' => '4137014078',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            473 => 
            array (
                'id' => 1474,
                'name' => '山东轻工职业学院',
                'city' => '淄博市',
                'code' => '4137014079',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            474 => 
            array (
                'id' => 1475,
                'name' => '山东城市建设职业学院',
                'city' => '济南市',
                'code' => '4137014080',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            475 => 
            array (
                'id' => 1476,
                'name' => '烟台汽车工程职业学院',
                'city' => '烟台市',
                'code' => '4137014081',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            476 => 
            array (
                'id' => 1477,
                'name' => '山东司法警官职业学院',
                'city' => '济南市',
                'code' => '4137014082',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            477 => 
            array (
                'id' => 1478,
                'name' => '菏泽家政职业学院',
                'city' => '菏泽市',
                'code' => '4137014118',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            478 => 
            array (
                'id' => 1479,
                'name' => '山东传媒职业学院',
                'city' => '济南市',
                'code' => '4137014193',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            479 => 
            array (
                'id' => 1480,
                'name' => '临沂职业学院',
                'city' => '临沂市',
                'code' => '4137014195',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            480 => 
            array (
                'id' => 1481,
                'name' => '枣庄职业学院',
                'city' => '枣庄市',
                'code' => '4137014196',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            481 => 
            array (
                'id' => 1482,
                'name' => '山东理工职业学院',
                'city' => '济宁市',
                'code' => '4137014242',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            482 => 
            array (
                'id' => 1483,
                'name' => '山东文化产业职业学院',
                'city' => '烟台市',
                'code' => '4137014261',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            483 => 
            array (
                'id' => 1484,
                'name' => '青岛远洋船员职业学院',
                'city' => '青岛市',
                'code' => '4137014320',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            484 => 
            array (
                'id' => 1485,
                'name' => '济南幼儿师范高等专科学校',
                'city' => '济南市',
                'code' => '4137014332',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            485 => 
            array (
                'id' => 1486,
                'name' => '济南护理职业学院',
                'city' => '济南市',
                'code' => '4137014343',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            486 => 
            array (
                'id' => 1487,
                'name' => '泰山护理职业学院',
                'city' => '泰安市',
                'code' => '4137014345',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            487 => 
            array (
                'id' => 1488,
                'name' => '山东海事职业学院',
                'city' => '潍坊市',
                'code' => '4137014346',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            488 => 
            array (
                'id' => 1489,
                'name' => '潍坊护理职业学院',
                'city' => '潍坊市',
                'code' => '4137014347',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            489 => 
            array (
                'id' => 1490,
                'name' => '潍坊工程职业学院',
                'city' => '潍坊市',
                'code' => '4137014379',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            490 => 
            array (
                'id' => 1491,
                'name' => '菏泽职业学院',
                'city' => '菏泽市',
                'code' => '4137014477',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            491 => 
            array (
                'id' => 1492,
                'name' => '山东艺术设计职业学院',
                'city' => '济南市',
                'code' => '4137014506',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            492 => 
            array (
                'id' => 1493,
                'name' => '威海海洋职业学院',
                'city' => '威海市',
                'code' => '4137014507',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            493 => 
            array (
                'id' => 1494,
                'name' => '山东特殊教育职业学院',
                'city' => '济南市',
                'code' => '4137014545',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            494 => 
            array (
                'id' => 1495,
                'name' => '烟台黄金职业学院',
                'city' => '烟台市',
                'code' => '4137014570',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            495 => 
            array (
                'id' => 1496,
                'name' => '日照航海工程职业学院',
                'city' => '日照市',
                'code' => '4137014605',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            496 => 
            array (
                'id' => 1497,
                'name' => '青岛工程职业学院',
                'city' => '青岛市',
                'code' => '4137014666',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            497 => 
            array (
                'id' => 1498,
                'name' => '青岛幼儿师范高等专科学校',
                'city' => '青岛市',
                'code' => '4137014688',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            498 => 
            array (
                'id' => 1499,
                'name' => '烟台幼儿师范高等专科学校',
                'city' => '烟台市',
                'code' => '4137014689',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            499 => 
            array (
                'id' => 1500,
                'name' => '烟台文化旅游职业学院',
                'city' => '烟台市',
                'code' => '4137014707',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'name' => '临沂科技职业学院',
                'city' => '临沂市',
                'code' => '4137014708',
                'supervisor' => '山东省',
                'level' => '专科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 1502,
                'name' => '青岛航空科技职业学院',
                'city' => '青岛市',
                'code' => '4137014709',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            2 => 
            array (
                'id' => 1503,
                'name' => '潍坊环境工程职业学院',
                'city' => '潍坊市',
                'code' => '4137014710',
                'supervisor' => '山东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            3 => 
            array (
                'id' => 1504,
                'name' => '中国人民解放军海军潜艇学院',
                'city' => '青岛市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'name' => '中国人民解放军海军航空大学',
                'city' => '烟台市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'name' => '中国人民解放军火箭军士官学校',
                'city' => '潍坊市',
                'code' => NULL,
                'supervisor' => '解放军火箭军',
                'level' => NULL,
                'type' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'name' => '华北水利水电大学',
                'city' => '郑州市',
                'code' => '4141010078',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 1508,
                'name' => '郑州大学',
                'city' => '郑州市',
                'code' => '4141010459',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 1509,
                'name' => '河南理工大学',
                'city' => '焦作市',
                'code' => '4141010460',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 1510,
                'name' => '郑州轻工业大学',
                'city' => '郑州市',
                'code' => '4141010462',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            10 => 
            array (
                'id' => 1511,
                'name' => '河南工业大学',
                'city' => '郑州市',
                'code' => '4141010463',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            11 => 
            array (
                'id' => 1512,
                'name' => '河南科技大学',
                'city' => '洛阳市',
                'code' => '4141010464',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 1513,
                'name' => '中原工学院',
                'city' => '郑州市',
                'code' => '4141010465',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            13 => 
            array (
                'id' => 1514,
                'name' => '河南农业大学',
                'city' => '郑州市',
                'code' => '4141010466',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            14 => 
            array (
                'id' => 1515,
                'name' => '河南科技学院',
                'city' => '新乡市',
                'code' => '4141010467',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 1516,
                'name' => '河南牧业经济学院',
                'city' => '郑州市',
                'code' => '4141010469',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            16 => 
            array (
                'id' => 1517,
                'name' => '河南中医药大学',
                'city' => '郑州市',
                'code' => '4141010471',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            17 => 
            array (
                'id' => 1518,
                'name' => '新乡医学院',
                'city' => '新乡市',
                'code' => '4141010472',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            18 => 
            array (
                'id' => 1519,
                'name' => '河南大学',
                'city' => '开封市',
                'code' => '4141010475',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            19 => 
            array (
                'id' => 1520,
                'name' => '河南师范大学',
                'city' => '新乡市',
                'code' => '4141010476',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            20 => 
            array (
                'id' => 1521,
                'name' => '信阳师范学院',
                'city' => '信阳市',
                'code' => '4141010477',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            21 => 
            array (
                'id' => 1522,
                'name' => '周口师范学院',
                'city' => '周口市',
                'code' => '4141010478',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            22 => 
            array (
                'id' => 1523,
                'name' => '安阳师范学院',
                'city' => '安阳市',
                'code' => '4141010479',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            23 => 
            array (
                'id' => 1524,
                'name' => '许昌学院',
                'city' => '许昌市',
                'code' => '4141010480',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 1525,
                'name' => '南阳师范学院',
                'city' => '南阳市',
                'code' => '4141010481',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 1526,
                'name' => '洛阳师范学院',
                'city' => '洛阳市',
                'code' => '4141010482',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            26 => 
            array (
                'id' => 1527,
                'name' => '商丘师范学院',
                'city' => '商丘市',
                'code' => '4141010483',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            27 => 
            array (
                'id' => 1528,
                'name' => '河南财经政法大学',
                'city' => '郑州市',
                'code' => '4141010484',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            28 => 
            array (
                'id' => 1529,
                'name' => '郑州航空工业管理学院',
                'city' => '郑州市',
                'code' => '4141010485',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            29 => 
            array (
                'id' => 1530,
                'name' => '黄淮学院',
                'city' => '驻马店市',
                'code' => '4141010918',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            30 => 
            array (
                'id' => 1531,
                'name' => '平顶山学院',
                'city' => '平顶山市',
                'code' => '4141010919',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            31 => 
            array (
                'id' => 1532,
                'name' => '郑州工程技术学院',
                'city' => '郑州市',
                'code' => '4141011068',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            32 => 
            array (
                'id' => 1533,
                'name' => '洛阳理工学院',
                'city' => '洛阳市',
                'code' => '4141011070',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            33 => 
            array (
                'id' => 1534,
                'name' => '新乡学院',
                'city' => '新乡市',
                'code' => '4141011071',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            34 => 
            array (
                'id' => 1535,
                'name' => '信阳农林学院',
                'city' => '信阳市',
                'code' => '4141011326',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            35 => 
            array (
                'id' => 1536,
                'name' => '河南工学院',
                'city' => '新乡市',
                'code' => '4141011329',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            36 => 
            array (
                'id' => 1537,
                'name' => '安阳工学院',
                'city' => '安阳市',
                'code' => '4141011330',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            37 => 
            array (
                'id' => 1538,
                'name' => '河南工程学院',
                'city' => '郑州市',
                'code' => '4141011517',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            38 => 
            array (
                'id' => 1539,
                'name' => '河南财政金融学院',
                'city' => '郑州市',
                'code' => '4141011652',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            39 => 
            array (
                'id' => 1540,
                'name' => '南阳理工学院',
                'city' => '南阳市',
                'code' => '4141011653',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 1541,
                'name' => '河南城建学院',
                'city' => '平顶山市',
                'code' => '4141011765',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 1542,
                'name' => '河南警察学院',
                'city' => '郑州市',
                'code' => '4141011788',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 1543,
                'name' => '黄河科技学院',
                'city' => '郑州市',
                'code' => '4141011834',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            43 => 
            array (
                'id' => 1544,
                'name' => '铁道警察学院',
                'city' => '郑州市',
                'code' => '4141012735',
                'supervisor' => '公安部',
                'level' => '本科',
                'type' => '公办',
            ),
            44 => 
            array (
                'id' => 1545,
                'name' => '郑州科技学院',
                'city' => '郑州市',
                'code' => '4141012746',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            45 => 
            array (
                'id' => 1546,
                'name' => '郑州工业应用技术学院',
                'city' => '郑州市',
                'code' => '4141012747',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            46 => 
            array (
                'id' => 1547,
                'name' => '郑州师范学院',
                'city' => '郑州市',
                'code' => '4141012949',
                'supervisor' => '河南省',
                'level' => '本科',
                'type' => '公办',
            ),
            47 => 
            array (
                'id' => 1548,
                'name' => '郑州财经学院',
                'city' => '郑州市',
                'code' => '4141013497',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            48 => 
            array (
                'id' => 1549,
                'name' => '黄河交通学院',
                'city' => '焦作市',
                'code' => '4141013498',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            49 => 
            array (
                'id' => 1550,
                'name' => '商丘工学院',
                'city' => '商丘市',
                'code' => '4141013500',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            50 => 
            array (
                'id' => 1551,
                'name' => '河南大学民生学院',
                'city' => '开封市',
                'code' => '4141013501',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            51 => 
            array (
                'id' => 1552,
                'name' => '河南师范大学新联学院',
                'city' => '郑州市',
                'code' => '4141013502',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            52 => 
            array (
                'id' => 1553,
                'name' => '信阳学院',
                'city' => '信阳市',
                'code' => '4141013503',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            53 => 
            array (
                'id' => 1554,
                'name' => '安阳学院',
                'city' => '安阳市',
                'code' => '4141013504',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            54 => 
            array (
                'id' => 1555,
                'name' => '新乡医学院三全学院',
                'city' => '新乡市',
                'code' => '4141013505',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            55 => 
            array (
                'id' => 1556,
                'name' => '河南科技学院新科学院',
                'city' => '新乡市',
                'code' => '4141013506',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            56 => 
            array (
                'id' => 1557,
                'name' => '郑州工商学院',
                'city' => '郑州市',
                'code' => '4141013507',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            57 => 
            array (
                'id' => 1558,
                'name' => '郑州经贸学院',
                'city' => '郑州市',
                'code' => '4141013508',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            58 => 
            array (
                'id' => 1559,
                'name' => '商丘学院',
                'city' => '商丘市',
                'code' => '4141014003',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            59 => 
            array (
                'id' => 1560,
                'name' => '郑州商学院',
                'city' => '郑州市',
                'code' => '4141014040',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            60 => 
            array (
                'id' => 1561,
                'name' => '河南科技职业大学',
                'city' => '周口市',
                'code' => '4141014169',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            61 => 
            array (
                'id' => 1562,
                'name' => '郑州升达经贸管理学院',
                'city' => '郑州市',
                'code' => '4141014333',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            62 => 
            array (
                'id' => 1563,
                'name' => '郑州西亚斯学院',
                'city' => '郑州市',
                'code' => '4141014654',
                'supervisor' => '河南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            63 => 
            array (
                'id' => 1564,
                'name' => '河南职业技术学院',
                'city' => '郑州市',
                'code' => '4141010824',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            64 => 
            array (
                'id' => 1565,
                'name' => '漯河职业技术学院',
                'city' => '漯河市',
                'code' => '4141010835',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            65 => 
            array (
                'id' => 1566,
                'name' => '三门峡职业技术学院',
                'city' => '三门峡市',
                'code' => '4141010842',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 1567,
                'name' => '郑州铁路职业技术学院',
                'city' => '郑州市',
                'code' => '4141010843',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            67 => 
            array (
                'id' => 1568,
                'name' => '开封大学',
                'city' => '开封市',
                'code' => '4141011069',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            68 => 
            array (
                'id' => 1569,
                'name' => '焦作大学',
                'city' => '焦作市',
                'code' => '4141011522',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            69 => 
            array (
                'id' => 1570,
                'name' => '濮阳职业技术学院',
                'city' => '濮阳市',
                'code' => '4141011787',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            70 => 
            array (
                'id' => 1571,
                'name' => '郑州电力高等专科学校',
                'city' => '郑州市',
                'code' => '4141011828',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            71 => 
            array (
                'id' => 1572,
                'name' => '黄河水利职业技术学院',
                'city' => '开封市',
                'code' => '4141012058',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            72 => 
            array (
                'id' => 1573,
                'name' => '许昌职业技术学院',
                'city' => '许昌市',
                'code' => '4141012067',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            73 => 
            array (
                'id' => 1574,
                'name' => '河南工业和信息化职业学院',
                'city' => '焦作市',
                'code' => '4141012581',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            74 => 
            array (
                'id' => 1575,
                'name' => '河南水利与环境职业学院',
                'city' => '郑州市',
                'code' => '4141012582',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            75 => 
            array (
                'id' => 1576,
                'name' => '商丘职业技术学院',
                'city' => '商丘市',
                'code' => '4141012745',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            76 => 
            array (
                'id' => 1577,
                'name' => '平顶山工业职业技术学院',
                'city' => '平顶山市',
                'code' => '4141012748',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            77 => 
            array (
                'id' => 1578,
                'name' => '周口职业技术学院',
                'city' => '周口市',
                'code' => '4141012750',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            78 => 
            array (
                'id' => 1579,
                'name' => '济源职业技术学院',
                'city' => '济源市',
                'code' => '4141012768',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            79 => 
            array (
                'id' => 1580,
                'name' => '河南司法警官职业学院',
                'city' => '郑州市',
                'code' => '4141012781',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            80 => 
            array (
                'id' => 1581,
                'name' => '鹤壁职业技术学院',
                'city' => '鹤壁市',
                'code' => '4141012793',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            81 => 
            array (
                'id' => 1582,
                'name' => '河南工业职业技术学院',
                'city' => '南阳市',
                'code' => '4141012794',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            82 => 
            array (
                'id' => 1583,
                'name' => '郑州澍青医学高等专科学校',
                'city' => '郑州市',
                'code' => '4141012948',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            83 => 
            array (
                'id' => 1584,
                'name' => '焦作师范高等专科学校',
                'city' => '焦作市',
                'code' => '4141012950',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            84 => 
            array (
                'id' => 1585,
                'name' => '河南检察职业学院',
                'city' => '郑州市',
                'code' => '4141013499',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            85 => 
            array (
                'id' => 1586,
                'name' => '河南质量工程职业学院',
                'city' => '平顶山市',
                'code' => '4141013564',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            86 => 
            array (
                'id' => 1587,
                'name' => '郑州信息科技职业学院',
                'city' => '郑州市',
                'code' => '4141013565',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            87 => 
            array (
                'id' => 1588,
                'name' => '漯河医学高等专科学校',
                'city' => '漯河市',
                'code' => '4141013780',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            88 => 
            array (
                'id' => 1589,
                'name' => '南阳医学高等专科学校',
                'city' => '南阳市',
                'code' => '4141013781',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            89 => 
            array (
                'id' => 1590,
                'name' => '商丘医学高等专科学校',
                'city' => '商丘市',
                'code' => '4141013782',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            90 => 
            array (
                'id' => 1591,
                'name' => '郑州电子信息职业技术学院',
                'city' => '郑州市',
                'code' => '4141013783',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            91 => 
            array (
                'id' => 1592,
                'name' => '信阳职业技术学院',
                'city' => '信阳市',
                'code' => '4141013784',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            92 => 
            array (
                'id' => 1593,
                'name' => '嵩山少林武术职业学院',
                'city' => '郑州市',
                'code' => '4141013785',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            93 => 
            array (
                'id' => 1594,
                'name' => '郑州工业安全职业学院',
                'city' => '郑州市',
                'code' => '4141013786',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            94 => 
            array (
                'id' => 1595,
                'name' => '永城职业学院',
                'city' => '商丘市',
                'code' => '4141013787',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            95 => 
            array (
                'id' => 1596,
                'name' => '河南经贸职业学院',
                'city' => '郑州市',
                'code' => '4141013788',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            96 => 
            array (
                'id' => 1597,
                'name' => '河南交通职业技术学院',
                'city' => '郑州市',
                'code' => '4141013789',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            97 => 
            array (
                'id' => 1598,
                'name' => '河南农业职业学院',
                'city' => '郑州市',
                'code' => '4141013790',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            98 => 
            array (
                'id' => 1599,
                'name' => '郑州旅游职业学院',
                'city' => '郑州市',
                'code' => '4141013791',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            99 => 
            array (
                'id' => 1600,
                'name' => '郑州职业技术学院',
                'city' => '郑州市',
                'code' => '4141013792',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            100 => 
            array (
                'id' => 1601,
                'name' => '河南信息统计职业学院',
                'city' => '郑州市',
                'code' => '4141013885',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            101 => 
            array (
                'id' => 1602,
                'name' => '河南林业职业学院',
                'city' => '洛阳市',
                'code' => '4141013889',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            102 => 
            array (
                'id' => 1603,
                'name' => '河南工业贸易职业学院',
                'city' => '郑州市',
                'code' => '4141013936',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            103 => 
            array (
                'id' => 1604,
                'name' => '郑州电力职业技术学院',
                'city' => '郑州市',
                'code' => '4141014062',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            104 => 
            array (
                'id' => 1605,
                'name' => '河南建筑职业技术学院',
                'city' => '郑州市',
                'code' => '4141014181',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            105 => 
            array (
                'id' => 1606,
                'name' => '漯河食品职业学院',
                'city' => '漯河市',
                'code' => '4141014233',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            106 => 
            array (
                'id' => 1607,
                'name' => '郑州城市职业学院',
                'city' => '郑州市',
                'code' => '4141014235',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            107 => 
            array (
                'id' => 1608,
                'name' => '安阳职业技术学院',
                'city' => '安阳市',
                'code' => '4141014243',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            108 => 
            array (
                'id' => 1609,
                'name' => '新乡职业技术学院',
                'city' => '新乡市',
                'code' => '4141014245',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            109 => 
            array (
                'id' => 1610,
                'name' => '驻马店职业技术学院',
                'city' => '驻马店市',
                'code' => '4141014251',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            110 => 
            array (
                'id' => 1611,
                'name' => '焦作工贸职业学院',
                'city' => '焦作市',
                'code' => '4141014300',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            111 => 
            array (
                'id' => 1612,
                'name' => '许昌陶瓷职业学院',
                'city' => '许昌市',
                'code' => '4141014301',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            112 => 
            array (
                'id' => 1613,
                'name' => '郑州理工职业学院',
                'city' => '郑州市',
                'code' => '4141014302',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            113 => 
            array (
                'id' => 1614,
                'name' => '郑州信息工程职业学院',
                'city' => '郑州市',
                'code' => '4141014303',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            114 => 
            array (
                'id' => 1615,
                'name' => '长垣烹饪职业技术学院',
                'city' => '新乡市',
                'code' => '4141014305',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            115 => 
            array (
                'id' => 1616,
                'name' => '开封文化艺术职业学院',
                'city' => '开封市',
                'code' => '4141014306',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            116 => 
            array (
                'id' => 1617,
                'name' => '河南应用技术职业学院',
                'city' => '郑州市',
                'code' => '4141014307',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 1618,
                'name' => '河南艺术职业学院',
                'city' => '郑州市',
                'code' => '4141014308',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            118 => 
            array (
                'id' => 1619,
                'name' => '河南机电职业学院',
                'city' => '郑州市',
                'code' => '4141014348',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            119 => 
            array (
                'id' => 1620,
                'name' => '河南护理职业学院',
                'city' => '安阳市',
                'code' => '4141014349',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            120 => 
            array (
                'id' => 1621,
                'name' => '许昌电气职业学院',
                'city' => '许昌市',
                'code' => '4141014350',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            121 => 
            array (
                'id' => 1622,
                'name' => '信阳涉外职业技术学院',
                'city' => '信阳市',
                'code' => '4141014351',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            122 => 
            array (
                'id' => 1623,
                'name' => '鹤壁汽车工程职业学院',
                'city' => '鹤壁市',
                'code' => '4141014352',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            123 => 
            array (
                'id' => 1624,
                'name' => '南阳职业学院',
                'city' => '南阳市',
                'code' => '4141014353',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            124 => 
            array (
                'id' => 1625,
                'name' => '郑州商贸旅游职业学院',
                'city' => '郑州市',
                'code' => '4141014380',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            125 => 
            array (
                'id' => 1626,
                'name' => '河南推拿职业学院',
                'city' => '洛阳市',
                'code' => '4141014382',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            126 => 
            array (
                'id' => 1627,
                'name' => '洛阳职业技术学院',
                'city' => '洛阳市',
                'code' => '4141014383',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            127 => 
            array (
                'id' => 1628,
                'name' => '郑州幼儿师范高等专科学校',
                'city' => '郑州市',
                'code' => '4141014391',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            128 => 
            array (
                'id' => 1629,
                'name' => '安阳幼儿师范高等专科学校',
                'city' => '安阳市',
                'code' => '4141014392',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            129 => 
            array (
                'id' => 1630,
                'name' => '郑州黄河护理职业学院',
                'city' => '郑州市',
                'code' => '4141014405',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            130 => 
            array (
                'id' => 1631,
                'name' => '河南医学高等专科学校',
                'city' => '郑州市',
                'code' => '4141014466',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            131 => 
            array (
                'id' => 1632,
                'name' => '郑州财税金融职业学院',
                'city' => '郑州市',
                'code' => '4141014478',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            132 => 
            array (
                'id' => 1633,
                'name' => '南阳农业职业学院',
                'city' => '南阳市',
                'code' => '4141014479',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            133 => 
            array (
                'id' => 1634,
                'name' => '洛阳科技职业学院',
                'city' => '洛阳市',
                'code' => '4141014480',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            134 => 
            array (
                'id' => 1635,
                'name' => '鹤壁能源化工职业学院',
                'city' => '鹤壁市',
                'code' => '4141014529',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            135 => 
            array (
                'id' => 1636,
                'name' => '平顶山文化艺术职业学院',
                'city' => '平顶山市',
                'code' => '4141014530',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            136 => 
            array (
                'id' => 1637,
                'name' => '濮阳医学高等专科学校',
                'city' => '濮阳市',
                'code' => '4141014597',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            137 => 
            array (
                'id' => 1638,
                'name' => '驻马店幼儿师范高等专科学校',
                'city' => '驻马店市',
                'code' => '4141014598',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            138 => 
            array (
                'id' => 1639,
                'name' => '三门峡社会管理职业学院',
                'city' => '三门峡市',
                'code' => '4141014606',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            139 => 
            array (
                'id' => 1640,
                'name' => '河南轻工职业学院',
                'city' => '郑州市',
                'code' => '4141014607',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            140 => 
            array (
                'id' => 1641,
                'name' => '河南测绘职业学院',
                'city' => '郑州市',
                'code' => '4141014608',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            141 => 
            array (
                'id' => 1642,
                'name' => '信阳航空职业学院',
                'city' => '信阳市',
                'code' => '4141014634',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            142 => 
            array (
                'id' => 1643,
                'name' => '郑州卫生健康职业学院',
                'city' => '郑州市',
                'code' => '4141014635',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            143 => 
            array (
                'id' => 1644,
                'name' => '河南物流职业学院',
                'city' => '新乡市',
                'code' => '4141014636',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            144 => 
            array (
                'id' => 1645,
                'name' => '河南地矿职业学院',
                'city' => '郑州市',
                'code' => '4141014637',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            145 => 
            array (
                'id' => 1646,
                'name' => '郑州亚欧交通职业学院',
                'city' => '郑州市',
                'code' => '4141014685',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '中外合作办学',
            ),
            146 => 
            array (
                'id' => 1647,
                'name' => '河南女子职业学院',
                'city' => '新乡市',
                'code' => '4141014711',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            147 => 
            array (
                'id' => 1648,
                'name' => '河南对外经济贸易职业学院',
                'city' => '开封市',
                'code' => '4141014712',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            148 => 
            array (
                'id' => 1649,
                'name' => '濮阳石油化工职业技术学院',
                'city' => '濮阳市',
                'code' => '4141014713',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 1650,
                'name' => '南阳科技职业学院',
                'city' => '南阳市',
                'code' => '4141014714',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 1651,
                'name' => '兰考三农职业学院',
                'city' => '开封市',
                'code' => '4141014715',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            151 => 
            array (
                'id' => 1652,
                'name' => '汝州职业技术学院',
                'city' => '平顶山市',
                'code' => '4141014716',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            152 => 
            array (
                'id' => 1653,
                'name' => '林州建筑职业技术学院',
                'city' => '安阳市',
                'code' => '4141014717',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            153 => 
            array (
                'id' => 1654,
                'name' => '郑州电子商务职业学院',
                'city' => '郑州市',
                'code' => '4141014718',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            154 => 
            array (
                'id' => 1655,
                'name' => '郑州轨道工程职业学院',
                'city' => '郑州市',
                'code' => '4141014719',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            155 => 
            array (
                'id' => 1656,
                'name' => '郑州体育职业学院',
                'city' => '郑州市',
                'code' => '4141014720',
                'supervisor' => '河南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            156 => 
            array (
                'id' => 1657,
                'name' => '平顶山职业技术学院',
                'city' => '平顶山市',
                'code' => '4241050709',
                'supervisor' => '河南省',
                'level' => '专科',
                'type' => '公办',
            ),
            157 => 
            array (
                'id' => 1658,
                'name' => '中国人民解放军战略支援部队信息工程大学',
                'city' => '郑州市',
                'code' => NULL,
                'supervisor' => '战略支援部队',
                'level' => NULL,
                'type' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'name' => '武汉大学',
                'city' => '武汉市',
                'code' => '4142010486',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            159 => 
            array (
                'id' => 1660,
                'name' => '华中科技大学',
                'city' => '武汉市',
                'code' => '4142010487',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 1661,
                'name' => '武汉科技大学',
                'city' => '武汉市',
                'code' => '4142010488',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            161 => 
            array (
                'id' => 1662,
                'name' => '长江大学',
                'city' => '荆州市',
                'code' => '4142010489',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 1663,
                'name' => '武汉工程大学',
                'city' => '武汉市',
                'code' => '4142010490',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            163 => 
            array (
                'id' => 1664,
                'name' => '中国地质大学（武汉）',
                'city' => '武汉市',
                'code' => '4142010491',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            164 => 
            array (
                'id' => 1665,
                'name' => '武汉纺织大学',
                'city' => '武汉市',
                'code' => '4142010495',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            165 => 
            array (
                'id' => 1666,
                'name' => '武汉轻工大学',
                'city' => '武汉市',
                'code' => '4142010496',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            166 => 
            array (
                'id' => 1667,
                'name' => '武汉理工大学',
                'city' => '武汉市',
                'code' => '4142010497',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            167 => 
            array (
                'id' => 1668,
                'name' => '湖北工业大学',
                'city' => '武汉市',
                'code' => '4142010500',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            168 => 
            array (
                'id' => 1669,
                'name' => '华中农业大学',
                'city' => '武汉市',
                'code' => '4142010504',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 1670,
                'name' => '湖北中医药大学',
                'city' => '武汉市',
                'code' => '4142010507',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 1671,
                'name' => '华中师范大学',
                'city' => '武汉市',
                'code' => '4142010511',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            171 => 
            array (
                'id' => 1672,
                'name' => '湖北大学',
                'city' => '武汉市',
                'code' => '4142010512',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            172 => 
            array (
                'id' => 1673,
                'name' => '湖北师范大学',
                'city' => '黄石市',
                'code' => '4142010513',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            173 => 
            array (
                'id' => 1674,
                'name' => '黄冈师范学院',
                'city' => '黄冈市',
                'code' => '4142010514',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            174 => 
            array (
                'id' => 1675,
                'name' => '湖北民族大学',
                'city' => '恩施土家族苗族自治州',
                'code' => '4142010517',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            175 => 
            array (
                'id' => 1676,
                'name' => '汉江师范学院',
                'city' => '十堰市',
                'code' => '4142010518',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            176 => 
            array (
                'id' => 1677,
                'name' => '湖北文理学院',
                'city' => '襄阳市',
                'code' => '4142010519',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            177 => 
            array (
                'id' => 1678,
                'name' => '中南财经政法大学',
                'city' => '武汉市',
                'code' => '4142010520',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 1679,
                'name' => '武汉体育学院',
                'city' => '武汉市',
                'code' => '4142010522',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            179 => 
            array (
                'id' => 1680,
                'name' => '湖北美术学院',
                'city' => '武汉市',
                'code' => '4142010523',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            180 => 
            array (
                'id' => 1681,
                'name' => '中南民族大学',
                'city' => '武汉市',
                'code' => '4142010524',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            181 => 
            array (
                'id' => 1682,
                'name' => '湖北汽车工业学院',
                'city' => '十堰市',
                'code' => '4142010525',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            182 => 
            array (
                'id' => 1683,
                'name' => '湖北工程学院',
                'city' => '孝感市',
                'code' => '4142010528',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            183 => 
            array (
                'id' => 1684,
                'name' => '湖北理工学院',
                'city' => '黄石市',
                'code' => '4142010920',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            184 => 
            array (
                'id' => 1685,
                'name' => '湖北科技学院',
                'city' => '咸宁市',
                'code' => '4142010927',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            185 => 
            array (
                'id' => 1686,
                'name' => '湖北医药学院',
                'city' => '十堰市',
                'code' => '4142010929',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            186 => 
            array (
                'id' => 1687,
                'name' => '江汉大学',
                'city' => '武汉市',
                'code' => '4142011072',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            187 => 
            array (
                'id' => 1688,
                'name' => '三峡大学',
                'city' => '宜昌市',
                'code' => '4142011075',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            188 => 
            array (
                'id' => 1689,
                'name' => '湖北警官学院',
                'city' => '武汉市',
                'code' => '4142011332',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            189 => 
            array (
                'id' => 1690,
                'name' => '荆楚理工学院',
                'city' => '荆门市',
                'code' => '4142011336',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            190 => 
            array (
                'id' => 1691,
                'name' => '武汉音乐学院',
                'city' => '武汉市',
                'code' => '4142011524',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            191 => 
            array (
                'id' => 1692,
                'name' => '湖北经济学院',
                'city' => '武汉市',
                'code' => '4142011600',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            192 => 
            array (
                'id' => 1693,
                'name' => '武汉商学院',
                'city' => '武汉市',
                'code' => '4142011654',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            193 => 
            array (
                'id' => 1694,
                'name' => '武汉东湖学院',
                'city' => '武汉市',
                'code' => '4142011798',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            194 => 
            array (
                'id' => 1695,
                'name' => '汉口学院',
                'city' => '武汉市',
                'code' => '4142011800',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            195 => 
            array (
                'id' => 1696,
                'name' => '武昌首义学院',
                'city' => '武汉市',
                'code' => '4142012309',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            196 => 
            array (
                'id' => 1697,
                'name' => '武昌理工学院',
                'city' => '武汉市',
                'code' => '4142012310',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            197 => 
            array (
                'id' => 1698,
                'name' => '武汉生物工程学院',
                'city' => '武汉市',
                'code' => '4142012362',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            198 => 
            array (
                'id' => 1699,
                'name' => '武汉晴川学院',
                'city' => '武汉市',
                'code' => '4142013188',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            199 => 
            array (
                'id' => 1700,
                'name' => '湖北大学知行学院',
                'city' => '武汉市',
                'code' => '4142013234',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            200 => 
            array (
                'id' => 1701,
                'name' => '武汉科技大学城市学院',
                'city' => '武汉市',
                'code' => '4142013235',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            201 => 
            array (
                'id' => 1702,
                'name' => '三峡大学科技学院',
                'city' => '宜昌市',
                'code' => '4142013236',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            202 => 
            array (
                'id' => 1703,
                'name' => '武汉文理学院',
                'city' => '武汉市',
                'code' => '4142013237',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            203 => 
            array (
                'id' => 1704,
                'name' => '湖北工业大学工程技术学院',
                'city' => '武汉市',
                'code' => '4142013238',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            204 => 
            array (
                'id' => 1705,
                'name' => '武汉工程大学邮电与信息工程学院',
                'city' => '武汉市',
                'code' => '4142013239',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            205 => 
            array (
                'id' => 1706,
                'name' => '武汉纺织大学外经贸学院',
                'city' => '武汉市',
                'code' => '4142013240',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            206 => 
            array (
                'id' => 1707,
                'name' => '武昌工学院',
                'city' => '武汉市',
                'code' => '4142013241',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            207 => 
            array (
                'id' => 1708,
                'name' => '武汉工商学院',
                'city' => '武汉市',
                'code' => '4142013242',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            208 => 
            array (
                'id' => 1709,
                'name' => '长江大学工程技术学院',
                'city' => '荆州市',
                'code' => '4142013245',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            209 => 
            array (
                'id' => 1710,
                'name' => '长江大学文理学院',
                'city' => '荆州市',
                'code' => '4142013246',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            210 => 
            array (
                'id' => 1711,
                'name' => '湖北商贸学院',
                'city' => '武汉市',
                'code' => '4142013247',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            211 => 
            array (
                'id' => 1712,
                'name' => '湖北汽车工业学院科技学院',
                'city' => '十堰市',
                'code' => '4142013248',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            212 => 
            array (
                'id' => 1713,
                'name' => '湖北医药学院药护学院',
                'city' => '十堰市',
                'code' => '4142013249',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            213 => 
            array (
                'id' => 1714,
                'name' => '湖北民族大学科技学院',
                'city' => '恩施土家族苗族自治州',
                'code' => '4142013250',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            214 => 
            array (
                'id' => 1715,
                'name' => '湖北经济学院法商学院',
                'city' => '武汉市',
                'code' => '4142013251',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            215 => 
            array (
                'id' => 1716,
                'name' => '武汉体育学院体育科技学院',
                'city' => '武汉市',
                'code' => '4142013253',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            216 => 
            array (
                'id' => 1717,
                'name' => '湖北师范大学文理学院',
                'city' => '黄石市',
                'code' => '4142013256',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            217 => 
            array (
                'id' => 1718,
                'name' => '湖北文理学院理工学院',
                'city' => '襄阳市',
                'code' => '4142013257',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            218 => 
            array (
                'id' => 1719,
                'name' => '湖北工程学院新技术学院',
                'city' => '孝感市',
                'code' => '4142013258',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            219 => 
            array (
                'id' => 1720,
                'name' => '文华学院',
                'city' => '武汉市',
                'code' => '4142013262',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            220 => 
            array (
                'id' => 1721,
                'name' => '武汉学院',
                'city' => '武汉市',
                'code' => '4142013634',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            221 => 
            array (
                'id' => 1722,
                'name' => '武汉工程科技学院',
                'city' => '武汉市',
                'code' => '4142013664',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            222 => 
            array (
                'id' => 1723,
                'name' => '武汉华夏理工学院',
                'city' => '武汉市',
                'code' => '4142013666',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            223 => 
            array (
                'id' => 1724,
                'name' => '武汉传媒学院',
                'city' => '武汉市',
                'code' => '4142013686',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            224 => 
            array (
                'id' => 1725,
                'name' => '武汉设计工程学院',
                'city' => '武汉市',
                'code' => '4142014035',
                'supervisor' => '湖北省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            225 => 
            array (
                'id' => 1726,
                'name' => '湖北第二师范学院',
                'city' => '武汉市',
                'code' => '4142014099',
                'supervisor' => '湖北省',
                'level' => '本科',
                'type' => '公办',
            ),
            226 => 
            array (
                'id' => 1727,
                'name' => '武汉职业技术学院',
                'city' => '武汉市',
                'code' => '4142010834',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            227 => 
            array (
                'id' => 1728,
                'name' => '黄冈职业技术学院',
                'city' => '黄冈市',
                'code' => '4142010955',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            228 => 
            array (
                'id' => 1729,
                'name' => '长江职业学院',
                'city' => '武汉市',
                'code' => '4142010956',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            229 => 
            array (
                'id' => 1730,
                'name' => '荆州理工职业学院',
                'city' => '荆州市',
                'code' => '4142011074',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            230 => 
            array (
                'id' => 1731,
                'name' => '湖北工业职业技术学院',
                'city' => '十堰市',
                'code' => '4142011334',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 1732,
                'name' => '鄂州职业大学',
                'city' => '鄂州市',
                'code' => '4142011335',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 1733,
                'name' => '武汉城市职业学院',
                'city' => '武汉市',
                'code' => '4142011796',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            233 => 
            array (
                'id' => 1734,
                'name' => '湖北职业技术学院',
                'city' => '孝感市',
                'code' => '4142012051',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            234 => 
            array (
                'id' => 1735,
                'name' => '武汉船舶职业技术学院',
                'city' => '武汉市',
                'code' => '4142012052',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            235 => 
            array (
                'id' => 1736,
                'name' => '恩施职业技术学院',
                'city' => '恩施土家族苗族自治州',
                'code' => '4142012347',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            236 => 
            array (
                'id' => 1737,
                'name' => '襄阳职业技术学院',
                'city' => '襄阳市',
                'code' => '4142012354',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            237 => 
            array (
                'id' => 1738,
                'name' => '武汉工贸职业学院',
                'city' => '武汉市',
                'code' => '4142012369',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            238 => 
            array (
                'id' => 1739,
                'name' => '荆州职业技术学院',
                'city' => '荆州市',
                'code' => '4142012737',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            239 => 
            array (
                'id' => 1740,
                'name' => '武汉工程职业技术学院',
                'city' => '武汉市',
                'code' => '4142012738',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            240 => 
            array (
                'id' => 1741,
                'name' => '仙桃职业学院',
                'city' => '仙桃市',
                'code' => '4142012740',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            241 => 
            array (
                'id' => 1742,
                'name' => '湖北轻工职业技术学院',
                'city' => '武汉市',
                'code' => '4142012744',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            242 => 
            array (
                'id' => 1743,
                'name' => '湖北交通职业技术学院',
                'city' => '武汉市',
                'code' => '4142012752',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            243 => 
            array (
                'id' => 1744,
                'name' => '湖北中医药高等专科学校',
                'city' => '荆州市',
                'code' => '4142012951',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            244 => 
            array (
                'id' => 1745,
                'name' => '武汉航海职业技术学院',
                'city' => '武汉市',
                'code' => '4142012952',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            245 => 
            array (
                'id' => 1746,
                'name' => '武汉铁路职业技术学院',
                'city' => '武汉市',
                'code' => '4142012977',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            246 => 
            array (
                'id' => 1747,
                'name' => '武汉软件工程职业学院',
                'city' => '武汉市',
                'code' => '4142012978',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            247 => 
            array (
                'id' => 1748,
                'name' => '湖北三峡职业技术学院',
                'city' => '宜昌市',
                'code' => '4142012979',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 1749,
                'name' => '随州职业技术学院',
                'city' => '随州市',
                'code' => '4142012980',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 1750,
                'name' => '武汉电力职业技术学院',
                'city' => '武汉市',
                'code' => '4142012981',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            250 => 
            array (
                'id' => 1751,
                'name' => '湖北水利水电职业技术学院',
                'city' => '武汉市',
                'code' => '4142012982',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            251 => 
            array (
                'id' => 1752,
                'name' => '湖北城市建设职业技术学院',
                'city' => '武汉市',
                'code' => '4142012983',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            252 => 
            array (
                'id' => 1753,
                'name' => '武汉警官职业学院',
                'city' => '武汉市',
                'code' => '4142012984',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 1754,
                'name' => '湖北生物科技职业学院',
                'city' => '武汉市',
                'code' => '4142012985',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 1755,
                'name' => '湖北开放职业学院',
                'city' => '武汉市',
                'code' => '4142012986',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            255 => 
            array (
                'id' => 1756,
                'name' => '武汉科技职业学院',
                'city' => '武汉市',
                'code' => '4142012987',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            256 => 
            array (
                'id' => 1757,
                'name' => '武汉外语外事职业学院',
                'city' => '武汉市',
                'code' => '4142012988',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            257 => 
            array (
                'id' => 1758,
                'name' => '武汉信息传播职业技术学院',
                'city' => '武汉市',
                'code' => '4142012989',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            258 => 
            array (
                'id' => 1759,
                'name' => '武昌职业学院',
                'city' => '武汉市',
                'code' => '4142012990',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            259 => 
            array (
                'id' => 1760,
                'name' => '武汉商贸职业学院',
                'city' => '武汉市',
                'code' => '4142012991',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            260 => 
            array (
                'id' => 1761,
                'name' => '湖北艺术职业学院',
                'city' => '武汉市',
                'code' => '4142013263',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            261 => 
            array (
                'id' => 1762,
                'name' => '武汉交通职业学院',
                'city' => '武汉市',
                'code' => '4142013264',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            262 => 
            array (
                'id' => 1763,
                'name' => '咸宁职业技术学院',
                'city' => '咸宁市',
                'code' => '4142013265',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            263 => 
            array (
                'id' => 1764,
                'name' => '长江工程职业技术学院',
                'city' => '武汉市',
                'code' => '4142013266',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 1765,
                'name' => '江汉艺术职业学院',
                'city' => '潜江市',
                'code' => '4142013793',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            265 => 
            array (
                'id' => 1766,
                'name' => '武汉民政职业学院',
                'city' => '武汉市',
                'code' => '4142013796',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 1767,
                'name' => '鄂东职业技术学院',
                'city' => '黄冈市',
                'code' => '4142013797',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 1768,
                'name' => '湖北财税职业学院',
                'city' => '武汉市',
                'code' => '4142013798',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            268 => 
            array (
                'id' => 1769,
                'name' => '黄冈科技职业学院',
                'city' => '黄冈市',
                'code' => '4142013799',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            269 => 
            array (
                'id' => 1770,
                'name' => '湖北国土资源职业学院',
                'city' => '武汉市',
                'code' => '4142013800',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            270 => 
            array (
                'id' => 1771,
                'name' => '湖北生态工程职业技术学院',
                'city' => '武汉市',
                'code' => '4142013801',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            271 => 
            array (
                'id' => 1772,
                'name' => '三峡电力职业学院',
                'city' => '宜昌市',
                'code' => '4142014061',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            272 => 
            array (
                'id' => 1773,
                'name' => '湖北科技职业学院',
                'city' => '武汉市',
                'code' => '4142014119',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            273 => 
            array (
                'id' => 1774,
                'name' => '湖北青年职业学院',
                'city' => '武汉市',
                'code' => '4142014120',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            274 => 
            array (
                'id' => 1775,
                'name' => '湖北工程职业学院',
                'city' => '黄石市',
                'code' => '4142014197',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            275 => 
            array (
                'id' => 1776,
                'name' => '三峡旅游职业技术学院',
                'city' => '宜昌市',
                'code' => '4142014258',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            276 => 
            array (
                'id' => 1777,
                'name' => '天门职业学院',
                'city' => '天门市',
                'code' => '4142014355',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            277 => 
            array (
                'id' => 1778,
                'name' => '湖北体育职业学院',
                'city' => '武汉市',
                'code' => '4142014356',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            278 => 
            array (
                'id' => 1779,
                'name' => '襄阳汽车职业技术学院',
                'city' => '襄阳市',
                'code' => '4142014357',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            279 => 
            array (
                'id' => 1780,
                'name' => '湖北幼儿师范高等专科学校',
                'city' => '武汉市',
                'code' => '4142014467',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            280 => 
            array (
                'id' => 1781,
                'name' => '湖北铁道运输职业学院',
                'city' => '武汉市',
                'code' => '4142014553',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            281 => 
            array (
                'id' => 1782,
                'name' => '武汉海事职业学院',
                'city' => '武汉市',
                'code' => '4142014554',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            282 => 
            array (
                'id' => 1783,
                'name' => '长江艺术工程职业学院',
                'city' => '荆州市',
                'code' => '4142014555',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            283 => 
            array (
                'id' => 1784,
                'name' => '荆门职业学院',
                'city' => '荆门市',
                'code' => '4142014571',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            284 => 
            array (
                'id' => 1785,
                'name' => '武汉铁路桥梁职业学院',
                'city' => '武汉市',
                'code' => '4142014590',
                'supervisor' => '湖北省',
                'level' => '专科',
                'type' => '公办',
            ),
            285 => 
            array (
                'id' => 1786,
                'name' => '武汉光谷职业学院',
                'city' => '武汉市',
                'code' => '4142014591',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            286 => 
            array (
                'id' => 1787,
                'name' => '湖北健康职业学院',
                'city' => '咸宁市',
                'code' => '4142014721',
                'supervisor' => '湖北省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            287 => 
            array (
                'id' => 1788,
                'name' => '中国人民解放军海军工程大学',
                'city' => '武汉市',
                'code' => NULL,
                'supervisor' => '解放军海军',
                'level' => NULL,
                'type' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'name' => '中国人民解放军空军预警学院',
                'city' => '武汉市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'name' => '中国人民解放军火箭军指挥学院',
                'city' => '武汉市',
                'code' => NULL,
                'supervisor' => '解放军火箭军',
                'level' => NULL,
                'type' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'name' => '湘潭大学',
                'city' => '湘潭市',
                'code' => '4143010530',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            291 => 
            array (
                'id' => 1792,
                'name' => '吉首大学',
                'city' => '湘西土家族苗族自治州',
                'code' => '4143010531',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            292 => 
            array (
                'id' => 1793,
                'name' => '湖南大学',
                'city' => '长沙市',
                'code' => '4143010532',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            293 => 
            array (
                'id' => 1794,
                'name' => '中南大学',
                'city' => '长沙市',
                'code' => '4143010533',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            294 => 
            array (
                'id' => 1795,
                'name' => '湖南科技大学',
                'city' => '湘潭市',
                'code' => '4143010534',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            295 => 
            array (
                'id' => 1796,
                'name' => '长沙理工大学',
                'city' => '长沙市',
                'code' => '4143010536',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            296 => 
            array (
                'id' => 1797,
                'name' => '湖南农业大学',
                'city' => '长沙市',
                'code' => '4143010537',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            297 => 
            array (
                'id' => 1798,
                'name' => '中南林业科技大学',
                'city' => '长沙市',
                'code' => '4143010538',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            298 => 
            array (
                'id' => 1799,
                'name' => '湖南中医药大学',
                'city' => '长沙市',
                'code' => '4143010541',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            299 => 
            array (
                'id' => 1800,
                'name' => '湖南师范大学',
                'city' => '长沙市',
                'code' => '4143010542',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            300 => 
            array (
                'id' => 1801,
                'name' => '湖南理工学院',
                'city' => '岳阳市',
                'code' => '4143010543',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            301 => 
            array (
                'id' => 1802,
                'name' => '湘南学院',
                'city' => '郴州市',
                'code' => '4143010545',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            302 => 
            array (
                'id' => 1803,
                'name' => '衡阳师范学院',
                'city' => '衡阳市',
                'code' => '4143010546',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            303 => 
            array (
                'id' => 1804,
                'name' => '邵阳学院',
                'city' => '邵阳市',
                'code' => '4143010547',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            304 => 
            array (
                'id' => 1805,
                'name' => '怀化学院',
                'city' => '怀化市',
                'code' => '4143010548',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            305 => 
            array (
                'id' => 1806,
                'name' => '湖南文理学院',
                'city' => '常德市',
                'code' => '4143010549',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            306 => 
            array (
                'id' => 1807,
                'name' => '湖南科技学院',
                'city' => '永州市',
                'code' => '4143010551',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            307 => 
            array (
                'id' => 1808,
                'name' => '湖南人文科技学院',
                'city' => '娄底市',
                'code' => '4143010553',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            308 => 
            array (
                'id' => 1809,
                'name' => '湖南工商大学',
                'city' => '长沙市',
                'code' => '4143010554',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            309 => 
            array (
                'id' => 1810,
                'name' => '南华大学',
                'city' => '衡阳市',
                'code' => '4143010555',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            310 => 
            array (
                'id' => 1811,
                'name' => '长沙医学院',
                'city' => '长沙市',
                'code' => '4143010823',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            311 => 
            array (
                'id' => 1812,
                'name' => '长沙学院',
                'city' => '长沙市',
                'code' => '4143011077',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            312 => 
            array (
                'id' => 1813,
                'name' => '湖南工程学院',
                'city' => '湘潭市',
                'code' => '4143011342',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            313 => 
            array (
                'id' => 1814,
                'name' => '湖南城市学院',
                'city' => '益阳市',
                'code' => '4143011527',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            314 => 
            array (
                'id' => 1815,
                'name' => '湖南工学院',
                'city' => '衡阳市',
                'code' => '4143011528',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            315 => 
            array (
                'id' => 1816,
                'name' => '湖南财政经济学院',
                'city' => '长沙市',
                'code' => '4143011532',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            316 => 
            array (
                'id' => 1817,
                'name' => '湖南警察学院',
                'city' => '长沙市',
                'code' => '4143011534',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            317 => 
            array (
                'id' => 1818,
                'name' => '湖南工业大学',
                'city' => '株洲市',
                'code' => '4143011535',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            318 => 
            array (
                'id' => 1819,
                'name' => '湖南女子学院',
                'city' => '长沙市',
                'code' => '4143011538',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            319 => 
            array (
                'id' => 1820,
                'name' => '湖南第一师范学院',
                'city' => '长沙市',
                'code' => '4143012034',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            320 => 
            array (
                'id' => 1821,
                'name' => '湖南医药学院',
                'city' => '怀化市',
                'code' => '4143012214',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            321 => 
            array (
                'id' => 1822,
                'name' => '湖南涉外经济学院',
                'city' => '长沙市',
                'code' => '4143012303',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            322 => 
            array (
                'id' => 1823,
                'name' => '湘潭大学兴湘学院',
                'city' => '湘潭市',
                'code' => '4143012599',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            323 => 
            array (
                'id' => 1824,
                'name' => '湖南工业大学科技学院',
                'city' => '株洲市',
                'code' => '4143012604',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            324 => 
            array (
                'id' => 1825,
                'name' => '湖南科技大学潇湘学院',
                'city' => '湘潭市',
                'code' => '4143012649',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            325 => 
            array (
                'id' => 1826,
                'name' => '南华大学船山学院',
                'city' => '衡阳市',
                'code' => '4143012650',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            326 => 
            array (
                'id' => 1827,
                'name' => '湘潭理工学院',
                'city' => '湘潭市',
                'code' => '4143012651',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            327 => 
            array (
                'id' => 1828,
                'name' => '湖南师范大学树达学院',
                'city' => '长沙市',
                'code' => '4143012652',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            328 => 
            array (
                'id' => 1829,
                'name' => '湖南农业大学东方科技学院',
                'city' => '长沙市',
                'code' => '4143012653',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            329 => 
            array (
                'id' => 1830,
                'name' => '中南林业科技大学涉外学院',
                'city' => '长沙市',
                'code' => '4143012656',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            330 => 
            array (
                'id' => 1831,
                'name' => '湖南文理学院芙蓉学院',
                'city' => '常德市',
                'code' => '4143012657',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            331 => 
            array (
                'id' => 1832,
                'name' => '湖南理工学院南湖学院',
                'city' => '岳阳市',
                'code' => '4143012658',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            332 => 
            array (
                'id' => 1833,
                'name' => '衡阳师范学院南岳学院',
                'city' => '衡阳市',
                'code' => '4143012659',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            333 => 
            array (
                'id' => 1834,
                'name' => '湖南工程学院应用技术学院',
                'city' => '湘潭市',
                'code' => '4143012660',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            334 => 
            array (
                'id' => 1835,
                'name' => '湖南中医药大学湘杏学院',
                'city' => '长沙市',
                'code' => '4143012661',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            335 => 
            array (
                'id' => 1836,
                'name' => '吉首大学张家界学院',
                'city' => '张家界市',
                'code' => '4143012662',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            336 => 
            array (
                'id' => 1837,
                'name' => '长沙理工大学城南学院',
                'city' => '长沙市',
                'code' => '4143013635',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            337 => 
            array (
                'id' => 1838,
                'name' => '长沙师范学院',
                'city' => '长沙市',
                'code' => '4143013806',
                'supervisor' => '湖南省',
                'level' => '本科',
                'type' => '公办',
            ),
            338 => 
            array (
                'id' => 1839,
                'name' => '湖南应用技术学院',
                'city' => '常德市',
                'code' => '4143013809',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            339 => 
            array (
                'id' => 1840,
                'name' => '湖南信息学院',
                'city' => '长沙市',
                'code' => '4143013836',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            340 => 
            array (
                'id' => 1841,
                'name' => '湖南交通工程学院',
                'city' => '衡阳市',
                'code' => '4143013924',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            341 => 
            array (
                'id' => 1842,
                'name' => '湖南软件职业学院（本科）',
                'city' => '湘潭市',
                'code' => '4143013925',
                'supervisor' => '湖南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            342 => 
            array (
                'id' => 1843,
                'name' => '湘中幼儿师范高等专科学校',
                'city' => '邵阳市',
                'code' => '3643000496',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            343 => 
            array (
                'id' => 1844,
                'name' => '长沙民政职业技术学院',
                'city' => '长沙市',
                'code' => '4143010827',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            344 => 
            array (
                'id' => 1845,
                'name' => '湖南工业职业技术学院',
                'city' => '长沙市',
                'code' => '4143010830',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            345 => 
            array (
                'id' => 1846,
                'name' => '株洲师范高等专科学校',
                'city' => '株洲市',
                'code' => '4143010836',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            346 => 
            array (
                'id' => 1847,
                'name' => '湖南信息职业技术学院',
                'city' => '长沙市',
                'code' => '4143010865',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            347 => 
            array (
                'id' => 1848,
                'name' => '湖南税务高等专科学校',
                'city' => '长沙市',
                'code' => '4143011601',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            348 => 
            array (
                'id' => 1849,
                'name' => '湖南冶金职业技术学院',
                'city' => '株洲市',
                'code' => '4143011604',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            349 => 
            array (
                'id' => 1850,
                'name' => '长沙航空职业技术学院',
                'city' => '长沙市',
                'code' => '4143012055',
                'supervisor' => '空军装备部',
                'level' => '专科',
                'type' => '公办',
            ),
            350 => 
            array (
                'id' => 1851,
                'name' => '湖南大众传媒职业技术学院',
                'city' => '长沙市',
                'code' => '4143012300',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            351 => 
            array (
                'id' => 1852,
                'name' => '永州职业技术学院',
                'city' => '永州市',
                'code' => '4143012301',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            352 => 
            array (
                'id' => 1853,
                'name' => '湖南铁道职业技术学院',
                'city' => '株洲市',
                'code' => '4143012302',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            353 => 
            array (
                'id' => 1854,
                'name' => '湖南科技职业学院',
                'city' => '长沙市',
                'code' => '4143012304',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            354 => 
            array (
                'id' => 1855,
                'name' => '湖南生物机电职业技术学院',
                'city' => '长沙市',
                'code' => '4143012343',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            355 => 
            array (
                'id' => 1856,
                'name' => '湖南交通职业技术学院',
                'city' => '长沙市',
                'code' => '4143012397',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            356 => 
            array (
                'id' => 1857,
                'name' => '湖南商务职业技术学院',
                'city' => '长沙市',
                'code' => '4143012401',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            357 => 
            array (
                'id' => 1858,
                'name' => '湖南体育职业学院',
                'city' => '长沙市',
                'code' => '4143012423',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            358 => 
            array (
                'id' => 1859,
                'name' => '湖南工程职业技术学院',
                'city' => '长沙市',
                'code' => '4143012425',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            359 => 
            array (
                'id' => 1860,
                'name' => '保险职业学院',
                'city' => '长沙市',
                'code' => '4143012596',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            360 => 
            array (
                'id' => 1861,
                'name' => '湖南外贸职业学院',
                'city' => '长沙市',
                'code' => '4143012597',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            361 => 
            array (
                'id' => 1862,
                'name' => '湖南网络工程职业学院',
                'city' => '长沙市',
                'code' => '4143012598',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            362 => 
            array (
                'id' => 1863,
                'name' => '邵阳职业技术学院',
                'city' => '邵阳市',
                'code' => '4143012600',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            363 => 
            array (
                'id' => 1864,
                'name' => '湖南司法警官职业学院',
                'city' => '长沙市',
                'code' => '4143012601',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            364 => 
            array (
                'id' => 1865,
                'name' => '长沙商贸旅游职业技术学院',
                'city' => '长沙市',
                'code' => '4143012603',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            365 => 
            array (
                'id' => 1866,
                'name' => '湖南环境生物职业技术学院',
                'city' => '衡阳市',
                'code' => '4143012739',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            366 => 
            array (
                'id' => 1867,
                'name' => '湖南邮电职业技术学院',
                'city' => '长沙市',
                'code' => '4143012845',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            367 => 
            array (
                'id' => 1868,
                'name' => '湘潭医卫职业技术学院',
                'city' => '湘潭市',
                'code' => '4143012846',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            368 => 
            array (
                'id' => 1869,
                'name' => '郴州职业技术学院',
                'city' => '郴州市',
                'code' => '4143012847',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            369 => 
            array (
                'id' => 1870,
                'name' => '娄底职业技术学院',
                'city' => '娄底市',
                'code' => '4143012848',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            370 => 
            array (
                'id' => 1871,
                'name' => '张家界航空工业职业技术学院',
                'city' => '张家界市',
                'code' => '4143012849',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            371 => 
            array (
                'id' => 1872,
                'name' => '长沙环境保护职业技术学院',
                'city' => '长沙市',
                'code' => '4143013031',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            372 => 
            array (
                'id' => 1873,
                'name' => '湖南艺术职业学院',
                'city' => '长沙市',
                'code' => '4143013032',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            373 => 
            array (
                'id' => 1874,
                'name' => '湖南机电职业技术学院',
                'city' => '长沙市',
                'code' => '4143013033',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            374 => 
            array (
                'id' => 1875,
                'name' => '长沙职业技术学院',
                'city' => '长沙市',
                'code' => '4143013036',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            375 => 
            array (
                'id' => 1876,
                'name' => '怀化职业技术学院',
                'city' => '怀化市',
                'code' => '4143013037',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            376 => 
            array (
                'id' => 1877,
                'name' => '岳阳职业技术学院',
                'city' => '岳阳市',
                'code' => '4143013038',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            377 => 
            array (
                'id' => 1878,
                'name' => '常德职业技术学院',
                'city' => '常德市',
                'code' => '4143013039',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            378 => 
            array (
                'id' => 1879,
                'name' => '长沙南方职业学院',
                'city' => '长沙市',
                'code' => '4143013041',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            379 => 
            array (
                'id' => 1880,
                'name' => '潇湘职业学院',
                'city' => '娄底市',
                'code' => '4143013042',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            380 => 
            array (
                'id' => 1881,
                'name' => '湖南化工职业技术学院',
                'city' => '株洲市',
                'code' => '4143013043',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            381 => 
            array (
                'id' => 1882,
                'name' => '湖南城建职业技术学院',
                'city' => '湘潭市',
                'code' => '4143013044',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            382 => 
            array (
                'id' => 1883,
                'name' => '湖南石油化工职业技术学院',
                'city' => '岳阳市',
                'code' => '4143013045',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            383 => 
            array (
                'id' => 1884,
                'name' => '湖南中医药高等专科学校',
                'city' => '株洲市',
                'code' => '4143013802',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            384 => 
            array (
                'id' => 1885,
                'name' => '湖南民族职业学院',
                'city' => '岳阳市',
                'code' => '4143013804',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            385 => 
            array (
                'id' => 1886,
                'name' => '湘西民族职业技术学院',
                'city' => '湘西土家族苗族自治州',
                'code' => '4143013805',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            386 => 
            array (
                'id' => 1887,
                'name' => '湖南财经工业职业技术学院',
                'city' => '衡阳市',
                'code' => '4143013807',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            387 => 
            array (
                'id' => 1888,
                'name' => '益阳职业技术学院',
                'city' => '益阳市',
                'code' => '4143013808',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            388 => 
            array (
                'id' => 1889,
                'name' => '湖南工艺美术职业学院',
                'city' => '益阳市',
                'code' => '4143013921',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            389 => 
            array (
                'id' => 1890,
                'name' => '湖南九嶷职业技术学院',
                'city' => '永州市',
                'code' => '4143013922',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            390 => 
            array (
                'id' => 1891,
                'name' => '湖南理工职业技术学院',
                'city' => '湘潭市',
                'code' => '4143013923',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            391 => 
            array (
                'id' => 1892,
                'name' => '湖南汽车工程职业学院',
                'city' => '株洲市',
                'code' => '4143013937',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            392 => 
            array (
                'id' => 1893,
                'name' => '长沙电力职业技术学院',
                'city' => '长沙市',
                'code' => '4143013938',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            393 => 
            array (
                'id' => 1894,
                'name' => '湖南水利水电职业技术学院',
                'city' => '长沙市',
                'code' => '4143013939',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            394 => 
            array (
                'id' => 1895,
                'name' => '湖南现代物流职业技术学院',
                'city' => '长沙市',
                'code' => '4143013940',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            395 => 
            array (
                'id' => 1896,
                'name' => '湖南高速铁路职业技术学院',
                'city' => '衡阳市',
                'code' => '4143013941',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            396 => 
            array (
                'id' => 1897,
                'name' => '湖南铁路科技职业技术学院',
                'city' => '株洲市',
                'code' => '4143013942',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            397 => 
            array (
                'id' => 1898,
                'name' => '湖南安全技术职业学院',
                'city' => '长沙市',
                'code' => '4143014025',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            398 => 
            array (
                'id' => 1899,
                'name' => '湖南电气职业技术学院',
                'city' => '湘潭市',
                'code' => '4143014071',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            399 => 
            array (
                'id' => 1900,
                'name' => '湖南外国语职业学院',
                'city' => '长沙市',
                'code' => '4143014072',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            400 => 
            array (
                'id' => 1901,
                'name' => '益阳医学高等专科学校',
                'city' => '益阳市',
                'code' => '4143014097',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            401 => 
            array (
                'id' => 1902,
                'name' => '湖南都市职业学院',
                'city' => '长沙市',
                'code' => '4143014121',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            402 => 
            array (
                'id' => 1903,
                'name' => '湖南电子科技职业学院',
                'city' => '长沙市',
                'code' => '4143014122',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            403 => 
            array (
                'id' => 1904,
                'name' => '湖南国防工业职业技术学院',
                'city' => '湘潭市',
                'code' => '4143014182',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            404 => 
            array (
                'id' => 1905,
                'name' => '湖南高尔夫旅游职业学院',
                'city' => '常德市',
                'code' => '4143014309',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            405 => 
            array (
                'id' => 1906,
                'name' => '湖南工商职业学院',
                'city' => '衡阳市',
                'code' => '4143014310',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            406 => 
            array (
                'id' => 1907,
                'name' => '湖南三一工业职业技术学院',
                'city' => '长沙市',
                'code' => '4143014322',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            407 => 
            array (
                'id' => 1908,
                'name' => '长沙卫生职业学院',
                'city' => '长沙市',
                'code' => '4143014358',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            408 => 
            array (
                'id' => 1909,
                'name' => '湖南食品药品职业学院',
                'city' => '长沙市',
                'code' => '4143014359',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            409 => 
            array (
                'id' => 1910,
                'name' => '湖南有色金属职业技术学院',
                'city' => '株洲市',
                'code' => '4143014360',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            410 => 
            array (
                'id' => 1911,
                'name' => '湖南吉利汽车职业技术学院',
                'city' => '湘潭市',
                'code' => '4143014406',
                'supervisor' => '湖南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            411 => 
            array (
                'id' => 1912,
                'name' => '湖南幼儿师范高等专科学校',
                'city' => '常德市',
                'code' => '4143014468',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            412 => 
            array (
                'id' => 1913,
                'name' => '湘南幼儿师范高等专科学校',
                'city' => '郴州市',
                'code' => '4143014495',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            413 => 
            array (
                'id' => 1914,
                'name' => '湖南劳动人事职业学院',
                'city' => '长沙市',
                'code' => '4143014508',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            414 => 
            array (
                'id' => 1915,
                'name' => '怀化师范高等专科学校',
                'city' => '怀化市',
                'code' => '4143014663',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            415 => 
            array (
                'id' => 1916,
                'name' => '永州师范高等专科学校',
                'city' => '永州市',
                'code' => '4143014690',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            416 => 
            array (
                'id' => 1917,
                'name' => '衡阳幼儿师范高等专科学校',
                'city' => '衡阳市',
                'code' => '4143014691',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            417 => 
            array (
                'id' => 1918,
                'name' => '长沙幼儿师范高等专科学校',
                'city' => '长沙市',
                'code' => '4143014692',
                'supervisor' => '湖南省',
                'level' => '专科',
                'type' => '公办',
            ),
            418 => 
            array (
                'id' => 1919,
                'name' => '中国人民解放军国防科技大学',
                'city' => '长沙市',
                'code' => NULL,
                'supervisor' => '中央军委',
                'level' => NULL,
                'type' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'name' => '中山大学',
                'city' => '广州市',
                'code' => '4144010558',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            420 => 
            array (
                'id' => 1921,
                'name' => '暨南大学',
                'city' => '广州市',
                'code' => '4144010559',
                'supervisor' => '中央统战部',
                'level' => '本科',
                'type' => '公办',
            ),
            421 => 
            array (
                'id' => 1922,
                'name' => '汕头大学',
                'city' => '汕头市',
                'code' => '4144010560',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            422 => 
            array (
                'id' => 1923,
                'name' => '华南理工大学',
                'city' => '广州市',
                'code' => '4144010561',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            423 => 
            array (
                'id' => 1924,
                'name' => '华南农业大学',
                'city' => '广州市',
                'code' => '4144010564',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            424 => 
            array (
                'id' => 1925,
                'name' => '广东海洋大学',
                'city' => '湛江市',
                'code' => '4144010566',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            425 => 
            array (
                'id' => 1926,
                'name' => '广州医科大学',
                'city' => '广州市',
                'code' => '4144010570',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            426 => 
            array (
                'id' => 1927,
                'name' => '广东医科大学',
                'city' => '湛江市',
                'code' => '4144010571',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            427 => 
            array (
                'id' => 1928,
                'name' => '广州中医药大学',
                'city' => '广州市',
                'code' => '4144010572',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            428 => 
            array (
                'id' => 1929,
                'name' => '广东药科大学',
                'city' => '广州市',
                'code' => '4144010573',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            429 => 
            array (
                'id' => 1930,
                'name' => '华南师范大学',
                'city' => '广州市',
                'code' => '4144010574',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            430 => 
            array (
                'id' => 1931,
                'name' => '韶关学院',
                'city' => '韶关市',
                'code' => '4144010576',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            431 => 
            array (
                'id' => 1932,
                'name' => '惠州学院',
                'city' => '惠州市',
                'code' => '4144010577',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            432 => 
            array (
                'id' => 1933,
                'name' => '韩山师范学院',
                'city' => '潮州市',
                'code' => '4144010578',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            433 => 
            array (
                'id' => 1934,
                'name' => '岭南师范学院',
                'city' => '湛江市',
                'code' => '4144010579',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            434 => 
            array (
                'id' => 1935,
                'name' => '肇庆学院',
                'city' => '肇庆市',
                'code' => '4144010580',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            435 => 
            array (
                'id' => 1936,
                'name' => '嘉应学院',
                'city' => '梅州市',
                'code' => '4144010582',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            436 => 
            array (
                'id' => 1937,
                'name' => '广州体育学院',
                'city' => '广州市',
                'code' => '4144010585',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            437 => 
            array (
                'id' => 1938,
                'name' => '广州美术学院',
                'city' => '广州市',
                'code' => '4144010586',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            438 => 
            array (
                'id' => 1939,
                'name' => '星海音乐学院',
                'city' => '广州市',
                'code' => '4144010587',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            439 => 
            array (
                'id' => 1940,
                'name' => '广东技术师范大学',
                'city' => '广州市',
                'code' => '4144010588',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            440 => 
            array (
                'id' => 1941,
                'name' => '深圳大学',
                'city' => '深圳市',
                'code' => '4144010590',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            441 => 
            array (
                'id' => 1942,
                'name' => '广东财经大学',
                'city' => '广州市',
                'code' => '4144010592',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            442 => 
            array (
                'id' => 1943,
                'name' => '广东白云学院',
                'city' => '广州市',
                'code' => '4144010822',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            443 => 
            array (
                'id' => 1944,
                'name' => '广州大学',
                'city' => '广州市',
                'code' => '4144011078',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            444 => 
            array (
                'id' => 1945,
                'name' => '广州航海学院',
                'city' => '广州市',
                'code' => '4144011106',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            445 => 
            array (
                'id' => 1946,
                'name' => '广东警官学院',
                'city' => '广州市',
                'code' => '4144011110',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            446 => 
            array (
                'id' => 1947,
                'name' => '仲恺农业工程学院',
                'city' => '广州市',
                'code' => '4144011347',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            447 => 
            array (
                'id' => 1948,
                'name' => '五邑大学',
                'city' => '江门市',
                'code' => '4144011349',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            448 => 
            array (
                'id' => 1949,
                'name' => '广东金融学院',
                'city' => '广州市',
                'code' => '4144011540',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            449 => 
            array (
                'id' => 1950,
                'name' => '电子科技大学中山学院',
                'city' => '中山市',
                'code' => '4144011545',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            450 => 
            array (
                'id' => 1951,
                'name' => '广东石油化工学院',
                'city' => '茂名市',
                'code' => '4144011656',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            451 => 
            array (
                'id' => 1952,
                'name' => '东莞理工学院',
                'city' => '东莞市',
                'code' => '4144011819',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            452 => 
            array (
                'id' => 1953,
                'name' => '广东工业大学',
                'city' => '广州市',
                'code' => '4144011845',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            453 => 
            array (
                'id' => 1954,
                'name' => '广东外语外贸大学',
                'city' => '广州市',
                'code' => '4144011846',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            454 => 
            array (
                'id' => 1955,
                'name' => '佛山科学技术学院',
                'city' => '佛山市',
                'code' => '4144011847',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            455 => 
            array (
                'id' => 1956,
                'name' => '广东培正学院',
                'city' => '广州市',
                'code' => '4144012059',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            456 => 
            array (
                'id' => 1957,
                'name' => '南方医科大学',
                'city' => '广州市',
                'code' => '4144012121',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            457 => 
            array (
                'id' => 1958,
                'name' => '广东东软学院',
                'city' => '佛山市',
                'code' => '4144012574',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            458 => 
            array (
                'id' => 1959,
                'name' => '华南理工大学广州学院',
                'city' => '广州市',
                'code' => '4144012617',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            459 => 
            array (
                'id' => 1960,
                'name' => '广州大学华软软件学院',
                'city' => '广州市',
                'code' => '4144012618',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            460 => 
            array (
                'id' => 1961,
                'name' => '中山大学南方学院',
                'city' => '广州市',
                'code' => '4144012619',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            461 => 
            array (
                'id' => 1962,
                'name' => '广东外语外贸大学南国商学院',
                'city' => '广州市',
                'code' => '4144012620',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            462 => 
            array (
                'id' => 1963,
                'name' => '广东财经大学华商学院',
                'city' => '广州市',
                'code' => '4144012621',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            463 => 
            array (
                'id' => 1964,
                'name' => '广东海洋大学寸金学院',
                'city' => '湛江市',
                'code' => '4144012622',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            464 => 
            array (
                'id' => 1965,
                'name' => '华南农业大学珠江学院',
                'city' => '广州市',
                'code' => '4144012623',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            465 => 
            array (
                'id' => 1966,
                'name' => '广州理工学院',
                'city' => '广州市',
                'code' => '4144012668',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            466 => 
            array (
                'id' => 1967,
                'name' => '北京师范大学珠海分校',
                'city' => '珠海市',
                'code' => '4144013177',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            467 => 
            array (
                'id' => 1968,
                'name' => '广东工业大学华立学院',
                'city' => '广州市',
                'code' => '4144013656',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            468 => 
            array (
                'id' => 1969,
                'name' => '广州大学松田学院',
                'city' => '广州市',
                'code' => '4144013657',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            469 => 
            array (
                'id' => 1970,
                'name' => '广州商学院',
                'city' => '广州市',
                'code' => '4144013667',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            470 => 
            array (
                'id' => 1971,
                'name' => '北京理工大学珠海学院',
                'city' => '珠海市',
                'code' => '4144013675',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            471 => 
            array (
                'id' => 1972,
                'name' => '吉林大学珠海学院',
                'city' => '珠海市',
                'code' => '4144013684',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            472 => 
            array (
                'id' => 1973,
                'name' => '广州工商学院',
                'city' => '广州市',
                'code' => '4144013714',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            473 => 
            array (
                'id' => 1974,
                'name' => '广州科技职业技术大学',
                'city' => '广州市',
                'code' => '4144013717',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            474 => 
            array (
                'id' => 1975,
                'name' => '广东科技学院',
                'city' => '东莞市',
                'code' => '4144013719',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            475 => 
            array (
                'id' => 1976,
                'name' => '广东理工学院',
                'city' => '肇庆市',
                'code' => '4144013720',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            476 => 
            array (
                'id' => 1977,
                'name' => '广东工商职业技术大学',
                'city' => '肇庆市',
                'code' => '4144013721',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            477 => 
            array (
                'id' => 1978,
                'name' => '东莞理工学院城市学院',
                'city' => '东莞市',
                'code' => '4144013844',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            478 => 
            array (
                'id' => 1979,
                'name' => '中山大学新华学院',
                'city' => '广州市',
                'code' => '4144013902',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            479 => 
            array (
                'id' => 1980,
                'name' => '广东第二师范学院',
                'city' => '广州市',
                'code' => '4144014278',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            480 => 
            array (
                'id' => 1981,
                'name' => '南方科技大学',
                'city' => '深圳市',
                'code' => '4144014325',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            481 => 
            array (
                'id' => 1982,
                'name' => '深圳技术大学',
                'city' => '深圳市',
                'code' => '4144014655',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            482 => 
            array (
                'id' => 1983,
                'name' => '北京师范大学-香港浸会大学联合国际学院',
                'city' => '珠海市',
                'code' => '4144016401',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            483 => 
            array (
                'id' => 1984,
                'name' => '香港中文大学（深圳）',
                'city' => '深圳市',
                'code' => '4144016407',
                'supervisor' => '广东省教育厅',
                'level' => '本科',
                'type' => '公办',
            ),
            484 => 
            array (
                'id' => 1985,
                'name' => '深圳北理莫斯科大学',
                'city' => '深圳市',
                'code' => '4144016409',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            485 => 
            array (
                'id' => 1986,
                'name' => '广东以色列理工学院',
                'city' => '汕头市',
                'code' => '4144016410',
                'supervisor' => '广东省',
                'level' => '本科',
                'type' => '公办',
            ),
            486 => 
            array (
                'id' => 1987,
                'name' => '顺德职业技术学院',
                'city' => '佛山市',
                'code' => '4144010831',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            487 => 
            array (
                'id' => 1988,
                'name' => '广东轻工职业技术学院',
                'city' => '广州市',
                'code' => '4144010833',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            488 => 
            array (
                'id' => 1989,
                'name' => '广东交通职业技术学院',
                'city' => '广州市',
                'code' => '4144010861',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            489 => 
            array (
                'id' => 1990,
                'name' => '广东水利电力职业技术学院',
                'city' => '广州市',
                'code' => '4144010862',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            490 => 
            array (
                'id' => 1991,
                'name' => '潮汕职业技术学院',
                'city' => '揭阳市',
                'code' => '4144010965',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            491 => 
            array (
                'id' => 1992,
                'name' => '深圳职业技术学院',
                'city' => '深圳市',
                'code' => '4144011113',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            492 => 
            array (
                'id' => 1993,
                'name' => '广东南华工商职业学院',
                'city' => '广州市',
                'code' => '4144011114',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            493 => 
            array (
                'id' => 1994,
                'name' => '私立华联学院',
                'city' => '广州市',
                'code' => '4144011121',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            494 => 
            array (
                'id' => 1995,
                'name' => '广州民航职业技术学院',
                'city' => '广州市',
                'code' => '4144012040',
                'supervisor' => '交通运输部（中国民用航空局）',
                'level' => '专科',
                'type' => '公办',
            ),
            495 => 
            array (
                'id' => 1996,
                'name' => '广州番禺职业技术学院',
                'city' => '广州市',
                'code' => '4144012046',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            496 => 
            array (
                'id' => 1997,
                'name' => '广东松山职业技术学院',
                'city' => '韶关市',
                'code' => '4144012060',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            497 => 
            array (
                'id' => 1998,
                'name' => '广东农工商职业技术学院',
                'city' => '广州市',
                'code' => '4144012322',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            498 => 
            array (
                'id' => 1999,
                'name' => '广东新安职业技术学院',
                'city' => '深圳市',
                'code' => '4144012325',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            499 => 
            array (
                'id' => 2000,
                'name' => '佛山职业技术学院',
                'city' => '佛山市',
                'code' => '4144012327',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'name' => '广东科学技术职业学院',
                'city' => '广州市',
                'code' => '4144012572',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 2002,
                'name' => '广东食品药品职业学院',
                'city' => '广州市',
                'code' => '4144012573',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            2 => 
            array (
                'id' => 2003,
                'name' => '广州康大职业技术学院',
                'city' => '广州市',
                'code' => '4144012575',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            3 => 
            array (
                'id' => 2004,
                'name' => '珠海艺术职业学院',
                'city' => '珠海市',
                'code' => '4144012576',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            4 => 
            array (
                'id' => 2005,
                'name' => '广东行政职业学院',
                'city' => '广州市',
                'code' => '4144012577',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            5 => 
            array (
                'id' => 2006,
                'name' => '广东体育职业技术学院',
                'city' => '广州市',
                'code' => '4144012578',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            6 => 
            array (
                'id' => 2007,
                'name' => '广东职业技术学院',
                'city' => '佛山市',
                'code' => '4144012736',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 2008,
                'name' => '广东建设职业技术学院',
                'city' => '广州市',
                'code' => '4144012741',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 2009,
                'name' => '广东女子职业技术学院',
                'city' => '广州市',
                'code' => '4144012742',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 2010,
                'name' => '广东机电职业技术学院',
                'city' => '广州市',
                'code' => '4144012743',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            10 => 
            array (
                'id' => 2011,
                'name' => '广东岭南职业技术学院',
                'city' => '广州市',
                'code' => '4144012749',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            11 => 
            array (
                'id' => 2012,
                'name' => '汕尾职业技术学院',
                'city' => '汕尾市',
                'code' => '4144012765',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 2013,
                'name' => '罗定职业技术学院',
                'city' => '云浮市',
                'code' => '4144012770',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            13 => 
            array (
                'id' => 2014,
                'name' => '阳江职业技术学院',
                'city' => '阳江市',
                'code' => '4144012771',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            14 => 
            array (
                'id' => 2015,
                'name' => '河源职业技术学院',
                'city' => '河源市',
                'code' => '4144012772',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 2016,
                'name' => '广东邮电职业技术学院',
                'city' => '广州市',
                'code' => '4144012953',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            16 => 
            array (
                'id' => 2017,
                'name' => '汕头职业技术学院',
                'city' => '汕头市',
                'code' => '4144012954',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            17 => 
            array (
                'id' => 2018,
                'name' => '揭阳职业技术学院',
                'city' => '揭阳市',
                'code' => '4144012956',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            18 => 
            array (
                'id' => 2019,
                'name' => '深圳信息职业技术学院',
                'city' => '深圳市',
                'code' => '4144012957',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            19 => 
            array (
                'id' => 2020,
                'name' => '清远职业技术学院',
                'city' => '清远市',
                'code' => '4144012958',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            20 => 
            array (
                'id' => 2021,
                'name' => '广东工贸职业技术学院',
                'city' => '广州市',
                'code' => '4144012959',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            21 => 
            array (
                'id' => 2022,
                'name' => '广东司法警官职业学院',
                'city' => '广州市',
                'code' => '4144012960',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            22 => 
            array (
                'id' => 2023,
                'name' => '广东亚视演艺职业学院',
                'city' => '东莞市',
                'code' => '4144012961',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            23 => 
            array (
                'id' => 2024,
                'name' => '广东省外语艺术职业学院',
                'city' => '广州市',
                'code' => '4144012962',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 2025,
                'name' => '广东文艺职业学院',
                'city' => '广州市',
                'code' => '4144013707',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 2026,
                'name' => '广州体育职业技术学院',
                'city' => '广州市',
                'code' => '4144013708',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            26 => 
            array (
                'id' => 2027,
                'name' => '广州工程技术职业学院',
                'city' => '广州市',
                'code' => '4144013709',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            27 => 
            array (
                'id' => 2028,
                'name' => '中山火炬职业技术学院',
                'city' => '中山市',
                'code' => '4144013710',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            28 => 
            array (
                'id' => 2029,
                'name' => '江门职业技术学院',
                'city' => '江门市',
                'code' => '4144013711',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            29 => 
            array (
                'id' => 2030,
                'name' => '茂名职业技术学院',
                'city' => '茂名市',
                'code' => '4144013712',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            30 => 
            array (
                'id' => 2031,
                'name' => '珠海城市职业技术学院',
                'city' => '珠海市',
                'code' => '4144013713',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            31 => 
            array (
                'id' => 2032,
                'name' => '广州涉外经济职业技术学院',
                'city' => '广州市',
                'code' => '4144013715',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            32 => 
            array (
                'id' => 2033,
                'name' => '广州南洋理工职业学院',
                'city' => '广州市',
                'code' => '4144013716',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            33 => 
            array (
                'id' => 2034,
                'name' => '惠州经济职业技术学院',
                'city' => '惠州市',
                'code' => '4144013718',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            34 => 
            array (
                'id' => 2035,
                'name' => '肇庆医学高等专科学校',
                'city' => '肇庆市',
                'code' => '4144013810',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            35 => 
            array (
                'id' => 2036,
                'name' => '广州现代信息工程职业技术学院',
                'city' => '广州市',
                'code' => '4144013912',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            36 => 
            array (
                'id' => 2037,
                'name' => '广东理工职业学院',
                'city' => '广州市',
                'code' => '4144013919',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            37 => 
            array (
                'id' => 2038,
                'name' => '广州华南商贸职业学院',
                'city' => '广州市',
                'code' => '4144013927',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            38 => 
            array (
                'id' => 2039,
                'name' => '广州华立科技职业学院',
                'city' => '广州市',
                'code' => '4144013928',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            39 => 
            array (
                'id' => 2040,
                'name' => '广州城市职业学院',
                'city' => '广州市',
                'code' => '4144013929',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 2041,
                'name' => '广东工程职业技术学院',
                'city' => '广州市',
                'code' => '4144013930',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 2042,
                'name' => '广州铁路职业技术学院',
                'city' => '广州市',
                'code' => '4144013943',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 2043,
                'name' => '广东科贸职业学院',
                'city' => '广州市',
                'code' => '4144014063',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            43 => 
            array (
                'id' => 2044,
                'name' => '广州科技贸易职业学院',
                'city' => '广州市',
                'code' => '4144014065',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            44 => 
            array (
                'id' => 2045,
                'name' => '中山职业技术学院',
                'city' => '中山市',
                'code' => '4144014066',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            45 => 
            array (
                'id' => 2046,
                'name' => '广州珠江职业技术学院',
                'city' => '广州市',
                'code' => '4144014123',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            46 => 
            array (
                'id' => 2047,
                'name' => '广州松田职业学院',
                'city' => '广州市',
                'code' => '4144014125',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            47 => 
            array (
                'id' => 2048,
                'name' => '广东文理职业学院',
                'city' => '湛江市',
                'code' => '4144014126',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            48 => 
            array (
                'id' => 2049,
                'name' => '广州城建职业学院',
                'city' => '广州市',
                'code' => '4144014136',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            49 => 
            array (
                'id' => 2050,
                'name' => '东莞职业技术学院',
                'city' => '东莞市',
                'code' => '4144014263',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            50 => 
            array (
                'id' => 2051,
                'name' => '广东南方职业学院',
                'city' => '江门市',
                'code' => '4144014265',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            51 => 
            array (
                'id' => 2052,
                'name' => '广州华商职业学院',
                'city' => '广州市',
                'code' => '4144014266',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            52 => 
            array (
                'id' => 2053,
                'name' => '广州华夏职业学院',
                'city' => '广州市',
                'code' => '4144014268',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            53 => 
            array (
                'id' => 2054,
                'name' => '广东环境保护工程职业学院',
                'city' => '佛山市',
                'code' => '4144014311',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            54 => 
            array (
                'id' => 2055,
                'name' => '广东青年职业学院',
                'city' => '广州市',
                'code' => '4144014361',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            55 => 
            array (
                'id' => 2056,
                'name' => '广州东华职业学院',
                'city' => '广州市',
                'code' => '4144014362',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            56 => 
            array (
                'id' => 2057,
                'name' => '广东创新科技职业学院',
                'city' => '东莞市',
                'code' => '4144014363',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            57 => 
            array (
                'id' => 2058,
                'name' => '广东舞蹈戏剧职业学院',
                'city' => '广州市',
                'code' => '4144014407',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            58 => 
            array (
                'id' => 2059,
                'name' => '惠州卫生职业技术学院',
                'city' => '惠州市',
                'code' => '4144014408',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            59 => 
            array (
                'id' => 2060,
                'name' => '广东信息工程职业学院',
                'city' => '肇庆市',
                'code' => '4144014427',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            60 => 
            array (
                'id' => 2061,
                'name' => '广东生态工程职业学院',
                'city' => '广州市',
                'code' => '4144014509',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            61 => 
            array (
                'id' => 2062,
                'name' => '惠州城市职业学院',
                'city' => '惠州市',
                'code' => '4144014510',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            62 => 
            array (
                'id' => 2063,
                'name' => '广东碧桂园职业学院',
                'city' => '清远市',
                'code' => '4144014511',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            63 => 
            array (
                'id' => 2064,
                'name' => '广东茂名健康职业学院',
                'city' => '茂名市',
                'code' => '4144014556',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            64 => 
            array (
                'id' => 2065,
                'name' => '广东酒店管理职业技术学院',
                'city' => '东莞市',
                'code' => '4144014572',
                'supervisor' => '广东省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            65 => 
            array (
                'id' => 2066,
                'name' => '广东茂名幼儿师范专科学校',
                'city' => '茂名市',
                'code' => '4144014587',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 2067,
                'name' => '广州卫生职业技术学院',
                'city' => '广州市',
                'code' => '4144014592',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            67 => 
            array (
                'id' => 2068,
                'name' => '惠州工程职业学院',
                'city' => '惠州市',
                'code' => '4144014609',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            68 => 
            array (
                'id' => 2069,
                'name' => '广东江门中医药职业学院',
                'city' => '江门市',
                'code' => '4144014610',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            69 => 
            array (
                'id' => 2070,
                'name' => '广东茂名农林科技职业学院',
                'city' => '茂名市',
                'code' => '4144014638',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            70 => 
            array (
                'id' => 2071,
                'name' => '广东江门幼儿师范高等专科学校',
                'city' => '江门市',
                'code' => '4144014664',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            71 => 
            array (
                'id' => 2072,
                'name' => '广东财贸职业学院',
                'city' => '清远市',
                'code' => '4144014667',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            72 => 
            array (
                'id' => 2073,
                'name' => '湛江幼儿师范专科学校',
                'city' => '湛江市',
                'code' => '4244050853',
                'supervisor' => '广东省',
                'level' => '专科',
                'type' => '公办',
            ),
            73 => 
            array (
                'id' => 2074,
                'name' => '广西大学',
                'city' => '南宁市',
                'code' => '4145010593',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            74 => 
            array (
                'id' => 2075,
                'name' => '广西科技大学',
                'city' => '柳州市',
                'code' => '4145010594',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            75 => 
            array (
                'id' => 2076,
                'name' => '桂林电子科技大学',
                'city' => '桂林市',
                'code' => '4145010595',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            76 => 
            array (
                'id' => 2077,
                'name' => '桂林理工大学',
                'city' => '桂林市',
                'code' => '4145010596',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            77 => 
            array (
                'id' => 2078,
                'name' => '广西医科大学',
                'city' => '南宁市',
                'code' => '4145010598',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            78 => 
            array (
                'id' => 2079,
                'name' => '右江民族医学院',
                'city' => '百色市',
                'code' => '4145010599',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            79 => 
            array (
                'id' => 2080,
                'name' => '广西中医药大学',
                'city' => '南宁市',
                'code' => '4145010600',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            80 => 
            array (
                'id' => 2081,
                'name' => '桂林医学院',
                'city' => '桂林市',
                'code' => '4145010601',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            81 => 
            array (
                'id' => 2082,
                'name' => '广西师范大学',
                'city' => '桂林市',
                'code' => '4145010602',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            82 => 
            array (
                'id' => 2083,
                'name' => '南宁师范大学',
                'city' => '南宁市',
                'code' => '4145010603',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            83 => 
            array (
                'id' => 2084,
                'name' => '广西民族师范学院',
                'city' => '崇左市',
                'code' => '4145010604',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            84 => 
            array (
                'id' => 2085,
                'name' => '河池学院',
                'city' => '河池市',
                'code' => '4145010605',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            85 => 
            array (
                'id' => 2086,
                'name' => '玉林师范学院',
                'city' => '玉林市',
                'code' => '4145010606',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            86 => 
            array (
                'id' => 2087,
                'name' => '广西艺术学院',
                'city' => '南宁市',
                'code' => '4145010607',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            87 => 
            array (
                'id' => 2088,
                'name' => '广西民族大学',
                'city' => '南宁市',
                'code' => '4145010608',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            88 => 
            array (
                'id' => 2089,
                'name' => '百色学院',
                'city' => '百色市',
                'code' => '4145010609',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            89 => 
            array (
                'id' => 2090,
                'name' => '梧州学院',
                'city' => '梧州市',
                'code' => '4145011354',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            90 => 
            array (
                'id' => 2091,
                'name' => '广西科技师范学院',
                'city' => '来宾市',
                'code' => '4145011546',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            91 => 
            array (
                'id' => 2092,
                'name' => '广西财经学院',
                'city' => '南宁市',
                'code' => '4145011548',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            92 => 
            array (
                'id' => 2093,
                'name' => '南宁学院',
                'city' => '南宁市',
                'code' => '4145011549',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            93 => 
            array (
                'id' => 2094,
                'name' => '北部湾大学',
                'city' => '钦州市',
                'code' => '4145011607',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            94 => 
            array (
                'id' => 2095,
                'name' => '桂林航天工业学院',
                'city' => '桂林市',
                'code' => '4145011825',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            95 => 
            array (
                'id' => 2096,
                'name' => '桂林旅游学院',
                'city' => '桂林市',
                'code' => '4145011837',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            96 => 
            array (
                'id' => 2097,
                'name' => '贺州学院',
                'city' => '贺州市',
                'code' => '4145011838',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            97 => 
            array (
                'id' => 2098,
                'name' => '广西警察学院',
                'city' => '南宁市',
                'code' => '4145013520',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            98 => 
            array (
                'id' => 2099,
                'name' => '北海艺术设计学院',
                'city' => '北海市',
                'code' => '4145013524',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            99 => 
            array (
                'id' => 2100,
                'name' => '广西大学行健文理学院',
                'city' => '南宁市',
                'code' => '4145013638',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            100 => 
            array (
                'id' => 2101,
                'name' => '柳州工学院',
                'city' => '柳州市',
                'code' => '4145013639',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            101 => 
            array (
                'id' => 2102,
                'name' => '广西民族大学相思湖学院',
                'city' => '南宁市',
                'code' => '4145013640',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            102 => 
            array (
                'id' => 2103,
                'name' => '广西师范大学漓江学院',
                'city' => '桂林市',
                'code' => '4145013641',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            103 => 
            array (
                'id' => 2104,
                'name' => '南宁师范大学师园学院',
                'city' => '南宁市',
                'code' => '4145013642',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            104 => 
            array (
                'id' => 2105,
                'name' => '广西中医药大学赛恩斯新医药学院',
                'city' => '南宁市',
                'code' => '4145013643',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            105 => 
            array (
                'id' => 2106,
                'name' => '桂林电子科技大学信息科技学院',
                'city' => '桂林市',
                'code' => '4145013644',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            106 => 
            array (
                'id' => 2107,
                'name' => '桂林理工大学博文管理学院',
                'city' => '桂林市',
                'code' => '4145013645',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            107 => 
            array (
                'id' => 2108,
                'name' => '广西外国语学院',
                'city' => '南宁市',
                'code' => '4145013830',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            108 => 
            array (
                'id' => 2109,
                'name' => '北京航空航天大学北海学院',
                'city' => '北海市',
                'code' => '4145013890',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            109 => 
            array (
                'id' => 2110,
                'name' => '广西城市职业大学',
                'city' => '崇左市',
                'code' => '4145013920',
                'supervisor' => '广西自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            110 => 
            array (
                'id' => 2111,
                'name' => '广西职业师范学院',
                'city' => '南宁市',
                'code' => '4145014684',
                'supervisor' => '广西壮族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            111 => 
            array (
                'id' => 2112,
                'name' => '桂林生命与健康职业技术学院',
                'city' => '桂林市',
                'code' => '4145010035',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            112 => 
            array (
                'id' => 2113,
                'name' => '广西机电职业技术学院',
                'city' => '南宁市',
                'code' => '4145010867',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            113 => 
            array (
                'id' => 2114,
                'name' => '广西体育高等专科学校',
                'city' => '南宁市',
                'code' => '4145011350',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            114 => 
            array (
                'id' => 2115,
                'name' => '南宁职业技术学院',
                'city' => '南宁市',
                'code' => '4145011355',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            115 => 
            array (
                'id' => 2116,
                'name' => '广西水利电力职业技术学院',
                'city' => '南宁市',
                'code' => '4145011608',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            116 => 
            array (
                'id' => 2117,
                'name' => '桂林师范高等专科学校',
                'city' => '桂林市',
                'code' => '4145011671',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 2118,
                'name' => '广西职业技术学院',
                'city' => '南宁市',
                'code' => '4145011773',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            118 => 
            array (
                'id' => 2119,
                'name' => '柳州职业技术学院',
                'city' => '柳州市',
                'code' => '4145012104',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            119 => 
            array (
                'id' => 2120,
                'name' => '广西生态工程职业技术学院',
                'city' => '柳州市',
                'code' => '4145012344',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            120 => 
            array (
                'id' => 2121,
                'name' => '广西交通职业技术学院',
                'city' => '南宁市',
                'code' => '4145012356',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            121 => 
            array (
                'id' => 2122,
                'name' => '广西工业职业技术学院',
                'city' => '南宁市',
                'code' => '4145012364',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            122 => 
            array (
                'id' => 2123,
                'name' => '广西国际商务职业技术学院',
                'city' => '南宁市',
                'code' => '4145012379',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            123 => 
            array (
                'id' => 2124,
                'name' => '广西农业职业技术学院',
                'city' => '南宁市',
                'code' => '4145012382',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            124 => 
            array (
                'id' => 2125,
                'name' => '柳州铁道职业技术学院',
                'city' => '柳州市',
                'code' => '4145012392',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            125 => 
            array (
                'id' => 2126,
                'name' => '广西建设职业技术学院',
                'city' => '南宁市',
                'code' => '4145013138',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            126 => 
            array (
                'id' => 2127,
                'name' => '广西现代职业技术学院',
                'city' => '河池市',
                'code' => '4145013522',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            127 => 
            array (
                'id' => 2128,
                'name' => '北海职业学院',
                'city' => '北海市',
                'code' => '4145013523',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            128 => 
            array (
                'id' => 2129,
                'name' => '桂林山水职业学院',
                'city' => '桂林市',
                'code' => '4145013526',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            129 => 
            array (
                'id' => 2130,
                'name' => '广西经贸职业技术学院',
                'city' => '南宁市',
                'code' => '4145013827',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            130 => 
            array (
                'id' => 2131,
                'name' => '广西工商职业技术学院',
                'city' => '南宁市',
                'code' => '4145013828',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            131 => 
            array (
                'id' => 2132,
                'name' => '广西演艺职业学院',
                'city' => '南宁市',
                'code' => '4145013829',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            132 => 
            array (
                'id' => 2133,
                'name' => '广西电力职业技术学院',
                'city' => '南宁市',
                'code' => '4145013831',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            133 => 
            array (
                'id' => 2134,
                'name' => '广西英华国际职业学院',
                'city' => '钦州市',
                'code' => '4145014026',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            134 => 
            array (
                'id' => 2135,
                'name' => '柳州城市职业学院',
                'city' => '柳州市',
                'code' => '4145014067',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            135 => 
            array (
                'id' => 2136,
                'name' => '百色职业学院',
                'city' => '百色市',
                'code' => '4145014068',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            136 => 
            array (
                'id' => 2137,
                'name' => '广西工程职业学院',
                'city' => '百色市',
                'code' => '4145014127',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            137 => 
            array (
                'id' => 2138,
                'name' => '广西理工职业技术学院',
                'city' => '崇左市',
                'code' => '4145014170',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            138 => 
            array (
                'id' => 2139,
                'name' => '梧州职业学院',
                'city' => '梧州市',
                'code' => '4145014171',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            139 => 
            array (
                'id' => 2140,
                'name' => '广西经济职业学院',
                'city' => '南宁市',
                'code' => '4145014211',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            140 => 
            array (
                'id' => 2141,
                'name' => '广西幼儿师范高等专科学校',
                'city' => '南宁市',
                'code' => '4145014220',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            141 => 
            array (
                'id' => 2142,
                'name' => '广西科技职业学院',
                'city' => '崇左市',
                'code' => '4145014312',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            142 => 
            array (
                'id' => 2143,
                'name' => '广西卫生职业技术学院',
                'city' => '南宁市',
                'code' => '4145014313',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            143 => 
            array (
                'id' => 2144,
                'name' => '广西培贤国际职业学院',
                'city' => '百色市',
                'code' => '4145014481',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            144 => 
            array (
                'id' => 2145,
                'name' => '广西金融职业技术学院',
                'city' => '南宁市',
                'code' => '4145014512',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            145 => 
            array (
                'id' => 2146,
                'name' => '广西中远职业学院',
                'city' => '崇左市',
                'code' => '4145014546',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            146 => 
            array (
                'id' => 2147,
                'name' => '玉柴职业技术学院',
                'city' => '玉林市',
                'code' => '4145014573',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            147 => 
            array (
                'id' => 2148,
                'name' => '广西蓝天航空职业学院',
                'city' => '来宾市',
                'code' => '4145014574',
                'supervisor' => '广西自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            148 => 
            array (
                'id' => 2149,
                'name' => '广西安全工程职业技术学院',
                'city' => '南宁市',
                'code' => '4145014611',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 2150,
                'name' => '广西自然资源职业技术学院',
                'city' => '崇左市',
                'code' => '4145014668',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 2151,
                'name' => '钦州幼儿师范高等专科学校',
                'city' => '钦州市',
                'code' => '4145014693',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            151 => 
            array (
                'id' => 2152,
                'name' => '梧州医学高等专科学校',
                'city' => '梧州市',
                'code' => '4145014694',
                'supervisor' => '广西壮族自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            152 => 
            array (
                'id' => 2153,
                'name' => '广西制造工程职业技术学院',
                'city' => '南宁市',
                'code' => '4145014722',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            153 => 
            array (
                'id' => 2154,
                'name' => '广西物流职业技术学院',
                'city' => '贵港市',
                'code' => '4145014723',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            154 => 
            array (
                'id' => 2155,
                'name' => '崇左幼儿师范高等专科学校',
                'city' => '崇左市',
                'code' => '4245051675',
                'supervisor' => '广西壮族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            155 => 
            array (
                'id' => 2156,
                'name' => '中国人民解放军陆军特种作战学院',
                'city' => '桂林市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            156 => 
            array (
                'id' => 2157,
                'name' => '海南大学',
                'city' => '海口市',
                'code' => '4146010589',
                'supervisor' => '海南省',
                'level' => '本科',
                'type' => '公办',
            ),
            157 => 
            array (
                'id' => 2158,
                'name' => '海南热带海洋学院',
                'city' => '三亚市',
                'code' => '4146011100',
                'supervisor' => '海南省',
                'level' => '本科',
                'type' => '公办',
            ),
            158 => 
            array (
                'id' => 2159,
                'name' => '海南师范大学',
                'city' => '海口市',
                'code' => '4146011658',
                'supervisor' => '海南省',
                'level' => '本科',
                'type' => '公办',
            ),
            159 => 
            array (
                'id' => 2160,
                'name' => '海南医学院',
                'city' => '海口市',
                'code' => '4146011810',
                'supervisor' => '海南省',
                'level' => '本科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 2161,
                'name' => '海口经济学院',
                'city' => '海口市',
                'code' => '4146012308',
                'supervisor' => '海南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            161 => 
            array (
                'id' => 2162,
                'name' => '琼台师范学院',
                'city' => '海口市',
                'code' => '4146013811',
                'supervisor' => '海南省',
                'level' => '本科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 2163,
                'name' => '三亚学院',
                'city' => '三亚市',
                'code' => '4146013892',
                'supervisor' => '海南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            163 => 
            array (
                'id' => 2164,
                'name' => '海南科技职业大学',
                'city' => '海口市',
                'code' => '4146014172',
                'supervisor' => '海南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            164 => 
            array (
                'id' => 2165,
                'name' => '海南职业技术学院',
                'city' => '海口市',
                'code' => '4146011999',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            165 => 
            array (
                'id' => 2166,
                'name' => '三亚城市职业学院',
                'city' => '三亚市',
                'code' => '4146012717',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            166 => 
            array (
                'id' => 2167,
                'name' => '海南软件职业技术学院',
                'city' => '琼海市',
                'code' => '4146013575',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            167 => 
            array (
                'id' => 2168,
                'name' => '海南政法职业学院',
                'city' => '海口市',
                'code' => '4146013576',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            168 => 
            array (
                'id' => 2169,
                'name' => '海南外国语职业学院',
                'city' => '文昌市',
                'code' => '4146013577',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 2170,
                'name' => '海南经贸职业技术学院',
                'city' => '海口市',
                'code' => '4146013875',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 2171,
                'name' => '海南工商职业学院',
                'city' => '海口市',
                'code' => '4146013876',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            171 => 
            array (
                'id' => 2172,
                'name' => '三亚航空旅游职业学院',
                'city' => '三亚市',
                'code' => '4146013931',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            172 => 
            array (
                'id' => 2173,
                'name' => '三亚理工职业学院',
                'city' => '三亚市',
                'code' => '4146014236',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            173 => 
            array (
                'id' => 2174,
                'name' => '海南体育职业技术学院',
                'city' => '海口市',
                'code' => '4146014575',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            174 => 
            array (
                'id' => 2175,
                'name' => '三亚中瑞酒店管理职业学院',
                'city' => '三亚市',
                'code' => '4146014612',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            175 => 
            array (
                'id' => 2176,
                'name' => '海南健康管理职业技术学院',
                'city' => '海口市',
                'code' => '4146014639',
                'supervisor' => '海南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            176 => 
            array (
                'id' => 2177,
                'name' => '海南卫生健康职业学院',
                'city' => '海口市',
                'code' => '4146014724',
                'supervisor' => '海南省',
                'level' => '专科',
                'type' => '公办',
            ),
            177 => 
            array (
                'id' => 2178,
                'name' => '重庆大学',
                'city' => '重庆市',
                'code' => '4150010611',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 2179,
                'name' => '重庆邮电大学',
                'city' => '重庆市',
                'code' => '4150010617',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            179 => 
            array (
                'id' => 2180,
                'name' => '重庆交通大学',
                'city' => '重庆市',
                'code' => '4150010618',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            180 => 
            array (
                'id' => 2181,
                'name' => '重庆医科大学',
                'city' => '重庆市',
                'code' => '4150010631',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            181 => 
            array (
                'id' => 2182,
                'name' => '西南大学',
                'city' => '重庆市',
                'code' => '4150010635',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            182 => 
            array (
                'id' => 2183,
                'name' => '重庆师范大学',
                'city' => '重庆市',
                'code' => '4150010637',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            183 => 
            array (
                'id' => 2184,
                'name' => '重庆文理学院',
                'city' => '重庆市',
                'code' => '4150010642',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            184 => 
            array (
                'id' => 2185,
                'name' => '重庆三峡学院',
                'city' => '重庆市',
                'code' => '4150010643',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            185 => 
            array (
                'id' => 2186,
                'name' => '长江师范学院',
                'city' => '重庆市',
                'code' => '4150010647',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            186 => 
            array (
                'id' => 2187,
                'name' => '四川外国语大学',
                'city' => '重庆市',
                'code' => '4150010650',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            187 => 
            array (
                'id' => 2188,
                'name' => '西南政法大学',
                'city' => '重庆市',
                'code' => '4150010652',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            188 => 
            array (
                'id' => 2189,
                'name' => '四川美术学院',
                'city' => '重庆市',
                'code' => '4150010655',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            189 => 
            array (
                'id' => 2190,
                'name' => '重庆科技学院',
                'city' => '重庆市',
                'code' => '4150011551',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            190 => 
            array (
                'id' => 2191,
                'name' => '重庆理工大学',
                'city' => '重庆市',
                'code' => '4150011660',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            191 => 
            array (
                'id' => 2192,
                'name' => '重庆工商大学',
                'city' => '重庆市',
                'code' => '4150011799',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            192 => 
            array (
                'id' => 2193,
                'name' => '重庆机电职业技术大学',
                'city' => '重庆市',
                'code' => '4150012607',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            193 => 
            array (
                'id' => 2194,
                'name' => '重庆工程学院',
                'city' => '重庆市',
                'code' => '4150012608',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            194 => 
            array (
                'id' => 2195,
                'name' => '重庆大学城市科技学院',
                'city' => '重庆市',
                'code' => '4150012616',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            195 => 
            array (
                'id' => 2196,
                'name' => '重庆警察学院',
                'city' => '重庆市',
                'code' => '4150012757',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            196 => 
            array (
                'id' => 2197,
                'name' => '重庆人文科技学院',
                'city' => '重庆市',
                'code' => '4150013548',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            197 => 
            array (
                'id' => 2198,
                'name' => '四川外国语大学重庆南方翻译学院',
                'city' => '重庆市',
                'code' => '4150013588',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            198 => 
            array (
                'id' => 2199,
                'name' => '重庆师范大学涉外商贸学院',
                'city' => '重庆市',
                'code' => '4150013589',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            199 => 
            array (
                'id' => 2200,
                'name' => '重庆工商大学融智学院',
                'city' => '重庆市',
                'code' => '4150013590',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            200 => 
            array (
                'id' => 2201,
                'name' => '重庆工商大学派斯学院',
                'city' => '重庆市',
                'code' => '4150013591',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            201 => 
            array (
                'id' => 2202,
                'name' => '重庆邮电大学移通学院',
                'city' => '重庆市',
                'code' => '4150013627',
                'supervisor' => '重庆市教委',
                'level' => '本科',
                'type' => '民办',
            ),
            202 => 
            array (
                'id' => 2203,
                'name' => '重庆第二师范学院',
                'city' => '重庆市',
                'code' => '4150014388',
                'supervisor' => '重庆市',
                'level' => '本科',
                'type' => '公办',
            ),
            203 => 
            array (
                'id' => 2204,
                'name' => '重庆航天职业技术学院',
                'city' => '重庆市',
                'code' => '4150010870',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            204 => 
            array (
                'id' => 2205,
                'name' => '重庆电力高等专科学校',
                'city' => '重庆市',
                'code' => '4150011848',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            205 => 
            array (
                'id' => 2206,
                'name' => '重庆工业职业技术学院',
                'city' => '重庆市',
                'code' => '4150012215',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            206 => 
            array (
                'id' => 2207,
                'name' => '重庆三峡职业学院',
                'city' => '重庆市',
                'code' => '4150012605',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            207 => 
            array (
                'id' => 2208,
                'name' => '重庆工贸职业技术学院',
                'city' => '重庆市',
                'code' => '4150012606',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            208 => 
            array (
                'id' => 2209,
                'name' => '重庆电子工程职业学院',
                'city' => '重庆市',
                'code' => '4150012609',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            209 => 
            array (
                'id' => 2210,
                'name' => '重庆海联职业技术学院',
                'city' => '重庆市',
                'code' => '4150012754',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            210 => 
            array (
                'id' => 2211,
                'name' => '重庆信息技术职业学院',
                'city' => '重庆市',
                'code' => '4150012755',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            211 => 
            array (
                'id' => 2212,
                'name' => '重庆传媒职业学院',
                'city' => '重庆市',
                'code' => '4150012756',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            212 => 
            array (
                'id' => 2213,
                'name' => '重庆城市管理职业学院',
                'city' => '重庆市',
                'code' => '4150012758',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            213 => 
            array (
                'id' => 2214,
                'name' => '重庆工程职业技术学院',
                'city' => '重庆市',
                'code' => '4150012759',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            214 => 
            array (
                'id' => 2215,
                'name' => '重庆建筑科技职业学院',
                'city' => '重庆市',
                'code' => '4150012820',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            215 => 
            array (
                'id' => 2216,
                'name' => '重庆城市职业学院',
                'city' => '重庆市',
                'code' => '4150013734',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            216 => 
            array (
                'id' => 2217,
                'name' => '重庆水利电力职业技术学院',
                'city' => '重庆市',
                'code' => '4150013735',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            217 => 
            array (
                'id' => 2218,
                'name' => '重庆工商职业学院',
                'city' => '重庆市',
                'code' => '4150013967',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            218 => 
            array (
                'id' => 2219,
                'name' => '重庆应用技术职业学院',
                'city' => '重庆市',
                'code' => '4150013968',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            219 => 
            array (
                'id' => 2220,
                'name' => '重庆三峡医药高等专科学校',
                'city' => '重庆市',
                'code' => '4150014008',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            220 => 
            array (
                'id' => 2221,
                'name' => '重庆医药高等专科学校',
                'city' => '重庆市',
                'code' => '4150014009',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            221 => 
            array (
                'id' => 2222,
                'name' => '重庆青年职业技术学院',
                'city' => '重庆市',
                'code' => '4150014069',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            222 => 
            array (
                'id' => 2223,
                'name' => '重庆财经职业学院',
                'city' => '重庆市',
                'code' => '4150014128',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            223 => 
            array (
                'id' => 2224,
                'name' => '重庆科创职业学院',
                'city' => '重庆市',
                'code' => '4150014173',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            224 => 
            array (
                'id' => 2225,
                'name' => '重庆建筑工程职业学院',
                'city' => '重庆市',
                'code' => '4150014183',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            225 => 
            array (
                'id' => 2226,
                'name' => '重庆电讯职业学院',
                'city' => '重庆市',
                'code' => '4150014237',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            226 => 
            array (
                'id' => 2227,
                'name' => '重庆能源职业学院',
                'city' => '重庆市',
                'code' => '4150014238',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            227 => 
            array (
                'id' => 2228,
                'name' => '重庆商务职业学院',
                'city' => '重庆市',
                'code' => '4150014246',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            228 => 
            array (
                'id' => 2229,
                'name' => '重庆交通职业学院',
                'city' => '重庆市',
                'code' => '4150014267',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            229 => 
            array (
                'id' => 2230,
                'name' => '重庆化工职业学院',
                'city' => '重庆市',
                'code' => '4150014315',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            230 => 
            array (
                'id' => 2231,
                'name' => '重庆旅游职业学院',
                'city' => '重庆市',
                'code' => '4150014316',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 2232,
                'name' => '重庆安全技术职业学院',
                'city' => '重庆市',
                'code' => '4150014365',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 2233,
                'name' => '重庆公共运输职业学院',
                'city' => '重庆市',
                'code' => '4150014366',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            233 => 
            array (
                'id' => 2234,
                'name' => '重庆艺术工程职业学院',
                'city' => '重庆市',
                'code' => '4150014367',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            234 => 
            array (
                'id' => 2235,
                'name' => '重庆轻工职业学院',
                'city' => '重庆市',
                'code' => '4150014368',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            235 => 
            array (
                'id' => 2236,
                'name' => '重庆电信职业学院',
                'city' => '重庆市',
                'code' => '4150014369',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            236 => 
            array (
                'id' => 2237,
                'name' => '重庆经贸职业学院',
                'city' => '重庆市',
                'code' => '4150014370',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            237 => 
            array (
                'id' => 2238,
                'name' => '重庆幼儿师范高等专科学校',
                'city' => '重庆市',
                'code' => '4150014428',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            238 => 
            array (
                'id' => 2239,
                'name' => '重庆文化艺术职业学院',
                'city' => '重庆市',
                'code' => '4150014482',
                'supervisor' => '重庆市',
                'level' => '专科',
                'type' => '公办',
            ),
            239 => 
            array (
                'id' => 2240,
                'name' => '重庆科技职业学院',
                'city' => '重庆市',
                'code' => '4150014491',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            240 => 
            array (
                'id' => 2241,
                'name' => '重庆资源与环境保护职业学院',
                'city' => '重庆市',
                'code' => '4150014557',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            241 => 
            array (
                'id' => 2242,
                'name' => '重庆护理职业学院',
                'city' => '重庆市',
                'code' => '4150014576',
                'supervisor' => '重庆市教委',
                'level' => '专科',
                'type' => '民办',
            ),
            242 => 
            array (
                'id' => 2243,
                'name' => '重庆理工职业学院',
                'city' => '重庆市',
                'code' => '4150014725',
                'supervisor' => '重庆市教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            243 => 
            array (
                'id' => 2244,
                'name' => '重庆智能工程职业学院',
                'city' => '重庆市',
                'code' => '4150014726',
                'supervisor' => '重庆市教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            244 => 
            array (
                'id' => 2245,
                'name' => '重庆健康职业学院',
                'city' => '重庆市',
                'code' => '4150014727',
                'supervisor' => '重庆市教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            245 => 
            array (
                'id' => 2246,
                'name' => '中国人民解放军陆军军医大学',
                'city' => '重庆市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'name' => '中国人民解放军陆军勤务学院',
                'city' => '重庆市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'name' => '四川大学',
                'city' => '成都市',
                'code' => '4151010610',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 2249,
                'name' => '西南交通大学',
                'city' => '成都市',
                'code' => '4151010613',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 2250,
                'name' => '电子科技大学',
                'city' => '成都市',
                'code' => '4151010614',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            250 => 
            array (
                'id' => 2251,
                'name' => '西南石油大学',
                'city' => '成都市',
                'code' => '4151010615',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            251 => 
            array (
                'id' => 2252,
                'name' => '成都理工大学',
                'city' => '成都市',
                'code' => '4151010616',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            252 => 
            array (
                'id' => 2253,
                'name' => '西南科技大学',
                'city' => '绵阳市',
                'code' => '4151010619',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 2254,
                'name' => '成都信息工程大学',
                'city' => '成都市',
                'code' => '4151010621',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 2255,
                'name' => '四川轻化工大学',
                'city' => '自贡市',
                'code' => '4151010622',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            255 => 
            array (
                'id' => 2256,
                'name' => '西华大学',
                'city' => '成都市',
                'code' => '4151010623',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            256 => 
            array (
                'id' => 2257,
                'name' => '中国民用航空飞行学院',
                'city' => '德阳市',
                'code' => '4151010624',
                'supervisor' => '交通运输部（中国民用航空局）',
                'level' => '本科',
                'type' => '公办',
            ),
            257 => 
            array (
                'id' => 2258,
                'name' => '四川农业大学',
                'city' => '雅安市',
                'code' => '4151010626',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            258 => 
            array (
                'id' => 2259,
                'name' => '西昌学院',
                'city' => '凉山彝族自治州',
                'code' => '4151010628',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            259 => 
            array (
                'id' => 2260,
                'name' => '西南医科大学',
                'city' => '泸州市',
                'code' => '4151010632',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            260 => 
            array (
                'id' => 2261,
                'name' => '成都中医药大学',
                'city' => '成都市',
                'code' => '4151010633',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            261 => 
            array (
                'id' => 2262,
                'name' => '川北医学院',
                'city' => '南充市',
                'code' => '4151010634',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            262 => 
            array (
                'id' => 2263,
                'name' => '四川师范大学',
                'city' => '成都市',
                'code' => '4151010636',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            263 => 
            array (
                'id' => 2264,
                'name' => '西华师范大学',
                'city' => '南充市',
                'code' => '4151010638',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 2265,
                'name' => '绵阳师范学院',
                'city' => '绵阳市',
                'code' => '4151010639',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            265 => 
            array (
                'id' => 2266,
                'name' => '内江师范学院',
                'city' => '内江市',
                'code' => '4151010640',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 2267,
                'name' => '宜宾学院',
                'city' => '宜宾市',
                'code' => '4151010641',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 2268,
                'name' => '四川文理学院',
                'city' => '达州市',
                'code' => '4151010644',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            268 => 
            array (
                'id' => 2269,
                'name' => '阿坝师范学院',
                'city' => '阿坝藏族羌族自治州',
                'code' => '4151010646',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            269 => 
            array (
                'id' => 2270,
                'name' => '乐山师范学院',
                'city' => '乐山市',
                'code' => '4151010649',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            270 => 
            array (
                'id' => 2271,
                'name' => '西南财经大学',
                'city' => '成都市',
                'code' => '4151010651',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            271 => 
            array (
                'id' => 2272,
                'name' => '成都体育学院',
                'city' => '成都市',
                'code' => '4151010653',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            272 => 
            array (
                'id' => 2273,
                'name' => '四川音乐学院',
                'city' => '成都市',
                'code' => '4151010654',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            273 => 
            array (
                'id' => 2274,
                'name' => '西南民族大学',
                'city' => '成都市',
                'code' => '4151010656',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            274 => 
            array (
                'id' => 2275,
                'name' => '成都大学',
                'city' => '成都市',
                'code' => '4151011079',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            275 => 
            array (
                'id' => 2276,
                'name' => '成都工业学院',
                'city' => '成都市',
                'code' => '4151011116',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            276 => 
            array (
                'id' => 2277,
                'name' => '攀枝花学院',
                'city' => '攀枝花市',
                'code' => '4151011360',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            277 => 
            array (
                'id' => 2278,
                'name' => '四川旅游学院',
                'city' => '成都市',
                'code' => '4151011552',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            278 => 
            array (
                'id' => 2279,
                'name' => '四川民族学院',
                'city' => '甘孜藏族自治州',
                'code' => '4151011661',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            279 => 
            array (
                'id' => 2280,
                'name' => '四川警察学院',
                'city' => '泸州市',
                'code' => '4151012212',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            280 => 
            array (
                'id' => 2281,
                'name' => '成都东软学院',
                'city' => '成都市',
                'code' => '4151012636',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            281 => 
            array (
                'id' => 2282,
                'name' => '成都艺术职业大学',
                'city' => '成都市',
                'code' => '4151012969',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            282 => 
            array (
                'id' => 2283,
                'name' => '电子科技大学成都学院',
                'city' => '成都市',
                'code' => '4151013665',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            283 => 
            array (
                'id' => 2284,
                'name' => '成都理工大学工程技术学院',
                'city' => '乐山市',
                'code' => '4151013668',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            284 => 
            array (
                'id' => 2285,
                'name' => '四川传媒学院',
                'city' => '成都市',
                'code' => '4151013669',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            285 => 
            array (
                'id' => 2286,
                'name' => '成都银杏酒店管理学院',
                'city' => '成都市',
                'code' => '4151013670',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            286 => 
            array (
                'id' => 2287,
                'name' => '成都文理学院',
                'city' => '成都市',
                'code' => '4151013671',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            287 => 
            array (
                'id' => 2288,
                'name' => '四川工商学院',
                'city' => '成都市',
                'code' => '4151013672',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            288 => 
            array (
                'id' => 2289,
                'name' => '四川外国语大学成都学院',
                'city' => '成都市',
                'code' => '4151013673',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            289 => 
            array (
                'id' => 2290,
                'name' => '成都医学院',
                'city' => '成都市',
                'code' => '4151013705',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            290 => 
            array (
                'id' => 2291,
                'name' => '四川工业科技学院',
                'city' => '德阳市',
                'code' => '4151013816',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            291 => 
            array (
                'id' => 2292,
                'name' => '四川大学锦城学院',
                'city' => '成都市',
                'code' => '4151013903',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            292 => 
            array (
                'id' => 2293,
                'name' => '西南财经大学天府学院',
                'city' => '绵阳市',
                'code' => '4151014037',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            293 => 
            array (
                'id' => 2294,
                'name' => '四川大学锦江学院',
                'city' => '眉山市',
                'code' => '4151014039',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            294 => 
            array (
                'id' => 2295,
                'name' => '四川文化艺术学院',
                'city' => '绵阳市',
                'code' => '4151014043',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            295 => 
            array (
                'id' => 2296,
                'name' => '西南科技大学城市学院',
                'city' => '绵阳市',
                'code' => '4151014045',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            296 => 
            array (
                'id' => 2297,
                'name' => '西南交通大学希望学院',
                'city' => '南充市',
                'code' => '4151014262',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            297 => 
            array (
                'id' => 2298,
                'name' => '成都师范学院',
                'city' => '成都市',
                'code' => '4151014389',
                'supervisor' => '四川省',
                'level' => '本科',
                'type' => '公办',
            ),
            298 => 
            array (
                'id' => 2299,
                'name' => '四川电影电视学院',
                'city' => '成都市',
                'code' => '4151014410',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            299 => 
            array (
                'id' => 2300,
                'name' => '吉利学院',
                'city' => '成都市',
                'code' => '4111012802',
                'supervisor' => '四川省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            300 => 
            array (
                'id' => 2301,
                'name' => '成都纺织高等专科学校',
                'city' => '成都市',
                'code' => '4151011553',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            301 => 
            array (
                'id' => 2302,
                'name' => '民办四川天一学院',
                'city' => '成都市',
                'code' => '4151011841',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            302 => 
            array (
                'id' => 2303,
                'name' => '成都航空职业技术学院',
                'city' => '成都市',
                'code' => '4151012064',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            303 => 
            array (
                'id' => 2304,
                'name' => '四川电力职业技术学院',
                'city' => '成都市',
                'code' => '4151012065',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            304 => 
            array (
                'id' => 2305,
                'name' => '成都职业技术学院',
                'city' => '成都市',
                'code' => '4151012635',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            305 => 
            array (
                'id' => 2306,
                'name' => '四川化工职业技术学院',
                'city' => '泸州市',
                'code' => '4151012637',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            306 => 
            array (
                'id' => 2307,
                'name' => '四川水利职业技术学院',
                'city' => '成都市',
                'code' => '4151012638',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            307 => 
            array (
                'id' => 2308,
                'name' => '南充职业技术学院',
                'city' => '南充市',
                'code' => '4151012639',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            308 => 
            array (
                'id' => 2309,
                'name' => '内江职业技术学院',
                'city' => '内江市',
                'code' => '4151012640',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            309 => 
            array (
                'id' => 2310,
                'name' => '四川航天职业技术学院',
                'city' => '成都市',
                'code' => '4151012641',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            310 => 
            array (
                'id' => 2311,
                'name' => '四川邮电职业技术学院',
                'city' => '成都市',
                'code' => '4151012642',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            311 => 
            array (
                'id' => 2312,
                'name' => '四川机电职业技术学院',
                'city' => '攀枝花市',
                'code' => '4151012751',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            312 => 
            array (
                'id' => 2313,
                'name' => '绵阳职业技术学院',
                'city' => '绵阳市',
                'code' => '4151012753',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            313 => 
            array (
                'id' => 2314,
                'name' => '四川交通职业技术学院',
                'city' => '成都市',
                'code' => '4151012761',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            314 => 
            array (
                'id' => 2315,
                'name' => '四川工商职业技术学院',
                'city' => '成都市',
                'code' => '4151012762',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            315 => 
            array (
                'id' => 2316,
                'name' => '四川工程职业技术学院',
                'city' => '德阳市',
                'code' => '4151012763',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            316 => 
            array (
                'id' => 2317,
                'name' => '四川建筑职业技术学院',
                'city' => '德阳市',
                'code' => '4151012764',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            317 => 
            array (
                'id' => 2318,
                'name' => '达州职业技术学院',
                'city' => '达州市',
                'code' => '4151012767',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            318 => 
            array (
                'id' => 2319,
                'name' => '四川托普信息技术职业学院',
                'city' => '成都市',
                'code' => '4151012963',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            319 => 
            array (
                'id' => 2320,
                'name' => '四川国际标榜职业学院',
                'city' => '成都市',
                'code' => '4151012964',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            320 => 
            array (
                'id' => 2321,
                'name' => '成都农业科技职业学院',
                'city' => '成都市',
                'code' => '4151012965',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            321 => 
            array (
                'id' => 2322,
                'name' => '宜宾职业技术学院',
                'city' => '宜宾市',
                'code' => '4151012966',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            322 => 
            array (
                'id' => 2323,
                'name' => '泸州职业技术学院',
                'city' => '泸州市',
                'code' => '4151012967',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            323 => 
            array (
                'id' => 2324,
                'name' => '眉山职业技术学院',
                'city' => '眉山市',
                'code' => '4151012968',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            324 => 
            array (
                'id' => 2325,
                'name' => '四川职业技术学院',
                'city' => '遂宁市',
                'code' => '4151012970',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            325 => 
            array (
                'id' => 2326,
                'name' => '乐山职业技术学院',
                'city' => '乐山市',
                'code' => '4151013048',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            326 => 
            array (
                'id' => 2327,
                'name' => '雅安职业技术学院',
                'city' => '雅安市',
                'code' => '4151013049',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            327 => 
            array (
                'id' => 2328,
                'name' => '四川商务职业学院',
                'city' => '成都市',
                'code' => '4151013812',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            328 => 
            array (
                'id' => 2329,
                'name' => '四川司法警官职业学院',
                'city' => '德阳市',
                'code' => '4151013813',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            329 => 
            array (
                'id' => 2330,
                'name' => '广安职业技术学院',
                'city' => '广安市',
                'code' => '4151013814',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            330 => 
            array (
                'id' => 2331,
                'name' => '四川信息职业技术学院',
                'city' => '广元市',
                'code' => '4151013815',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            331 => 
            array (
                'id' => 2332,
                'name' => '四川文化传媒职业学院',
                'city' => '成都市',
                'code' => '4151014004',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            332 => 
            array (
                'id' => 2333,
                'name' => '四川华新现代职业学院',
                'city' => '成都市',
                'code' => '4151014005',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            333 => 
            array (
                'id' => 2334,
                'name' => '四川铁道职业学院',
                'city' => '成都市',
                'code' => '4151014006',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            334 => 
            array (
                'id' => 2335,
                'name' => '四川艺术职业学院',
                'city' => '成都市',
                'code' => '4151014007',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            335 => 
            array (
                'id' => 2336,
                'name' => '四川中医药高等专科学校',
                'city' => '绵阳市',
                'code' => '4151014010',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            336 => 
            array (
                'id' => 2337,
                'name' => '四川科技职业学院',
                'city' => '成都市',
                'code' => '4151014070',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            337 => 
            array (
                'id' => 2338,
                'name' => '四川文化产业职业学院',
                'city' => '成都市',
                'code' => '4151014086',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            338 => 
            array (
                'id' => 2339,
                'name' => '四川财经职业学院',
                'city' => '成都市',
                'code' => '4151014091',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            339 => 
            array (
                'id' => 2340,
                'name' => '四川城市职业学院',
                'city' => '成都市',
                'code' => '4151014175',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            340 => 
            array (
                'id' => 2341,
                'name' => '四川现代职业学院',
                'city' => '成都市',
                'code' => '4151014176',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            341 => 
            array (
                'id' => 2342,
                'name' => '四川幼儿师范高等专科学校',
                'city' => '绵阳市',
                'code' => '4151014221',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            342 => 
            array (
                'id' => 2343,
                'name' => '四川长江职业学院',
                'city' => '成都市',
                'code' => '4151014323',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            343 => 
            array (
                'id' => 2344,
                'name' => '四川三河职业学院',
                'city' => '泸州市',
                'code' => '4151014386',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            344 => 
            array (
                'id' => 2345,
                'name' => '川北幼儿师范高等专科学校',
                'city' => '广元市',
                'code' => '4151014393',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            345 => 
            array (
                'id' => 2346,
                'name' => '四川卫生康复职业学院',
                'city' => '自贡市',
                'code' => '4151014409',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            346 => 
            array (
                'id' => 2347,
                'name' => '四川汽车职业技术学院',
                'city' => '绵阳市',
                'code' => '4151014411',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            347 => 
            array (
                'id' => 2348,
                'name' => '巴中职业技术学院',
                'city' => '巴中市',
                'code' => '4151014483',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            348 => 
            array (
                'id' => 2349,
                'name' => '四川希望汽车职业学院',
                'city' => '资阳市',
                'code' => '4151014484',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            349 => 
            array (
                'id' => 2350,
                'name' => '四川电子机械职业技术学院',
                'city' => '绵阳市',
                'code' => '4151014485',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            350 => 
            array (
                'id' => 2351,
                'name' => '四川文轩职业学院',
                'city' => '成都市',
                'code' => '4151014486',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            351 => 
            array (
                'id' => 2352,
                'name' => '川南幼儿师范高等专科学校',
                'city' => '内江市',
                'code' => '4151014496',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            352 => 
            array (
                'id' => 2353,
                'name' => '四川护理职业学院',
                'city' => '德阳市',
                'code' => '4151014513',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            353 => 
            array (
                'id' => 2354,
                'name' => '成都工业职业技术学院',
                'city' => '成都市',
                'code' => '4151014514',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            354 => 
            array (
                'id' => 2355,
                'name' => '四川西南航空职业学院',
                'city' => '成都市',
                'code' => '4151014515',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            355 => 
            array (
                'id' => 2356,
                'name' => '成都工贸职业技术学院',
                'city' => '成都市',
                'code' => '4151014547',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            356 => 
            array (
                'id' => 2357,
                'name' => '四川应用技术职业学院',
                'city' => '凉山彝族自治州',
                'code' => '4151014548',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            357 => 
            array (
                'id' => 2358,
                'name' => '西昌民族幼儿师范高等专科学校',
                'city' => '凉山彝族自治州',
                'code' => '4151014629',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            358 => 
            array (
                'id' => 2359,
                'name' => '眉山药科职业学院',
                'city' => '眉山市',
                'code' => '4151014640',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            359 => 
            array (
                'id' => 2360,
                'name' => '天府新区信息职业学院',
                'city' => '眉山市',
                'code' => '4151014641',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            360 => 
            array (
                'id' => 2361,
                'name' => '德阳城市轨道交通职业学院',
                'city' => '德阳市',
                'code' => '4151014642',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            361 => 
            array (
                'id' => 2362,
                'name' => '德阳科贸职业学院',
                'city' => '德阳市',
                'code' => '4151014643',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            362 => 
            array (
                'id' => 2363,
                'name' => '江阳城建职业学院',
                'city' => '泸州市',
                'code' => '4151014644',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            363 => 
            array (
                'id' => 2364,
                'name' => '天府新区航空旅游职业学院',
                'city' => '眉山市',
                'code' => '4151014645',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            364 => 
            array (
                'id' => 2365,
                'name' => '天府新区通用航空职业学院',
                'city' => '眉山市',
                'code' => '4151014646',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            365 => 
            array (
                'id' => 2366,
                'name' => '阿坝职业学院',
                'city' => '阿坝藏族羌族自治州',
                'code' => '4151014647',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            366 => 
            array (
                'id' => 2367,
                'name' => '达州中医药职业学院',
                'city' => '达州市',
                'code' => '4151014669',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            367 => 
            array (
                'id' => 2368,
                'name' => '内江卫生与健康职业学院',
                'city' => '内江市',
                'code' => '4151014670',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            368 => 
            array (
                'id' => 2369,
                'name' => '南充科技职业学院',
                'city' => '南充市',
                'code' => '4151014671',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            369 => 
            array (
                'id' => 2370,
                'name' => '攀枝花攀西职业学院',
                'city' => '攀枝花市',
                'code' => '4151014672',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            370 => 
            array (
                'id' => 2371,
                'name' => '资阳口腔职业学院',
                'city' => '资阳市',
                'code' => '4151014673',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            371 => 
            array (
                'id' => 2372,
                'name' => '资阳环境科技职业学院',
                'city' => '资阳市',
                'code' => '4151014674',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            372 => 
            array (
                'id' => 2373,
                'name' => '南充文化旅游职业学院',
                'city' => '南充市',
                'code' => '4151014728',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            373 => 
            array (
                'id' => 2374,
                'name' => '南充电影工业职业学院',
                'city' => '南充市',
                'code' => '4151014729',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            374 => 
            array (
                'id' => 2375,
                'name' => '绵阳飞行职业学院',
                'city' => '绵阳市',
                'code' => '4151014730',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            375 => 
            array (
                'id' => 2376,
                'name' => '德阳农业科技职业学院',
                'city' => '德阳市',
                'code' => '4151014731',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            376 => 
            array (
                'id' => 2377,
                'name' => '泸州医疗器械职业学院',
                'city' => '泸州市',
                'code' => '4151014732',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            377 => 
            array (
                'id' => 2378,
                'name' => '广元中核职业技术学院',
                'city' => '广元市',
                'code' => '4251050881',
                'supervisor' => '四川省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            378 => 
            array (
                'id' => 2379,
                'name' => '四川体育职业学院',
                'city' => '成都市',
                'code' => '4251051351',
                'supervisor' => '四川省',
                'level' => '专科',
                'type' => '公办',
            ),
            379 => 
            array (
                'id' => 2380,
                'name' => '中国人民武装警察部队警官学院',
                'city' => '成都市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'name' => '贵州大学',
                'city' => '贵阳市',
                'code' => '4152010657',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            381 => 
            array (
                'id' => 2382,
                'name' => '贵州医科大学',
                'city' => '贵阳市',
                'code' => '4152010660',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            382 => 
            array (
                'id' => 2383,
                'name' => '遵义医科大学',
                'city' => '遵义市',
                'code' => '4152010661',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            383 => 
            array (
                'id' => 2384,
                'name' => '贵州中医药大学',
                'city' => '贵阳市',
                'code' => '4152010662',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            384 => 
            array (
                'id' => 2385,
                'name' => '贵州师范大学',
                'city' => '贵阳市',
                'code' => '4152010663',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            385 => 
            array (
                'id' => 2386,
                'name' => '遵义师范学院',
                'city' => '遵义市',
                'code' => '4152010664',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            386 => 
            array (
                'id' => 2387,
                'name' => '铜仁学院',
                'city' => '铜仁市',
                'code' => '4152010665',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            387 => 
            array (
                'id' => 2388,
                'name' => '兴义民族师范学院',
                'city' => '黔西南布依族苗族自治州',
                'code' => '4152010666',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            388 => 
            array (
                'id' => 2389,
                'name' => '安顺学院',
                'city' => '安顺市',
                'code' => '4152010667',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            389 => 
            array (
                'id' => 2390,
                'name' => '贵州工程应用技术学院',
                'city' => '毕节市',
                'code' => '4152010668',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            390 => 
            array (
                'id' => 2391,
                'name' => '凯里学院',
                'city' => '黔东南苗族侗族自治州',
                'code' => '4152010669',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            391 => 
            array (
                'id' => 2392,
                'name' => '黔南民族师范学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152010670',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            392 => 
            array (
                'id' => 2393,
                'name' => '贵州财经大学',
                'city' => '贵阳市',
                'code' => '4152010671',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            393 => 
            array (
                'id' => 2394,
                'name' => '贵州民族大学',
                'city' => '贵阳市',
                'code' => '4152010672',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            394 => 
            array (
                'id' => 2395,
                'name' => '贵阳学院',
                'city' => '贵阳市',
                'code' => '4152010976',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            395 => 
            array (
                'id' => 2396,
                'name' => '六盘水师范学院',
                'city' => '六盘水市',
                'code' => '4152010977',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            396 => 
            array (
                'id' => 2397,
                'name' => '贵州商学院',
                'city' => '贵阳市',
                'code' => '4152011731',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            397 => 
            array (
                'id' => 2398,
                'name' => '贵州警察学院',
                'city' => '贵阳市',
                'code' => '4152012107',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            398 => 
            array (
                'id' => 2399,
                'name' => '贵州中医药大学时珍学院',
                'city' => '贵阳市',
                'code' => '4152013647',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            399 => 
            array (
                'id' => 2400,
                'name' => '贵州财经大学商务学院',
                'city' => '贵阳市',
                'code' => '4152013648',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            400 => 
            array (
                'id' => 2401,
                'name' => '贵州大学科技学院',
                'city' => '贵阳市',
                'code' => '4152013649',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            401 => 
            array (
                'id' => 2402,
                'name' => '贵州大学明德学院',
                'city' => '贵阳市',
                'code' => '4152013650',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            402 => 
            array (
                'id' => 2403,
                'name' => '贵州民族大学人文科技学院',
                'city' => '贵阳市',
                'code' => '4152013651',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            403 => 
            array (
                'id' => 2404,
                'name' => '贵州师范大学求是学院',
                'city' => '贵阳市',
                'code' => '4152013652',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            404 => 
            array (
                'id' => 2405,
                'name' => '遵义医科大学医学与科技学院',
                'city' => '遵义市',
                'code' => '4152013653',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            405 => 
            array (
                'id' => 2406,
                'name' => '贵州医科大学神奇民族医药学院',
                'city' => '贵阳市',
                'code' => '4152013676',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            406 => 
            array (
                'id' => 2407,
                'name' => '贵州师范学院',
                'city' => '贵阳市',
                'code' => '4152014223',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            407 => 
            array (
                'id' => 2408,
                'name' => '贵州理工学院',
                'city' => '贵阳市',
                'code' => '4152014440',
                'supervisor' => '贵州省',
                'level' => '本科',
                'type' => '公办',
            ),
            408 => 
            array (
                'id' => 2409,
                'name' => '茅台学院',
                'city' => '遵义市',
                'code' => '4152014625',
                'supervisor' => '贵州省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            409 => 
            array (
                'id' => 2410,
                'name' => '黔南民族医学高等专科学校',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152011663',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            410 => 
            array (
                'id' => 2411,
                'name' => '贵州交通职业技术学院',
                'city' => '贵阳市',
                'code' => '4152012222',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            411 => 
            array (
                'id' => 2412,
                'name' => '贵州航天职业技术学院',
                'city' => '遵义市',
                'code' => '4152012223',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            412 => 
            array (
                'id' => 2413,
                'name' => '贵州电子信息职业技术学院',
                'city' => '黔东南苗族侗族自治州',
                'code' => '4152012336',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            413 => 
            array (
                'id' => 2414,
                'name' => '安顺职业技术学院',
                'city' => '安顺市',
                'code' => '4152012821',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            414 => 
            array (
                'id' => 2415,
                'name' => '黔东南民族职业技术学院',
                'city' => '黔东南苗族侗族自治州',
                'code' => '4152012822',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            415 => 
            array (
                'id' => 2416,
                'name' => '黔南民族职业技术学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152012823',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            416 => 
            array (
                'id' => 2417,
                'name' => '遵义职业技术学院',
                'city' => '遵义市',
                'code' => '4152012824',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            417 => 
            array (
                'id' => 2418,
                'name' => '贵州城市职业学院',
                'city' => '贵阳市',
                'code' => '4152012850',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            418 => 
            array (
                'id' => 2419,
                'name' => '贵州工业职业技术学院',
                'city' => '贵阳市',
                'code' => '4152013052',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            419 => 
            array (
                'id' => 2420,
                'name' => '贵州电力职业技术学院',
                'city' => '贵阳市',
                'code' => '4152013053',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            420 => 
            array (
                'id' => 2421,
                'name' => '六盘水职业技术学院',
                'city' => '六盘水市',
                'code' => '4152013054',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            421 => 
            array (
                'id' => 2422,
                'name' => '铜仁职业技术学院',
                'city' => '铜仁市',
                'code' => '4152013055',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            422 => 
            array (
                'id' => 2423,
                'name' => '黔西南民族职业技术学院',
                'city' => '黔西南布依族苗族自治州',
                'code' => '4152013817',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            423 => 
            array (
                'id' => 2424,
                'name' => '贵州轻工职业技术学院',
                'city' => '贵阳市',
                'code' => '4152013818',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            424 => 
            array (
                'id' => 2425,
                'name' => '遵义医药高等专科学校',
                'city' => '遵义市',
                'code' => '4152014011',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            425 => 
            array (
                'id' => 2426,
                'name' => '贵阳护理职业学院',
                'city' => '贵阳市',
                'code' => '4152014083',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            426 => 
            array (
                'id' => 2427,
                'name' => '贵阳职业技术学院',
                'city' => '贵阳市',
                'code' => '4152014129',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            427 => 
            array (
                'id' => 2428,
                'name' => '毕节职业技术学院',
                'city' => '毕节市',
                'code' => '4152014198',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            428 => 
            array (
                'id' => 2429,
                'name' => '贵州职业技术学院',
                'city' => '贵阳市',
                'code' => '4152014252',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            429 => 
            array (
                'id' => 2430,
                'name' => '贵州盛华职业学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014371',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            430 => 
            array (
                'id' => 2431,
                'name' => '贵州工商职业学院',
                'city' => '贵阳市',
                'code' => '4152014412',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            431 => 
            array (
                'id' => 2432,
                'name' => '贵阳幼儿师范高等专科学校',
                'city' => '贵阳市',
                'code' => '4152014469',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            432 => 
            array (
                'id' => 2433,
                'name' => '铜仁幼儿师范高等专科学校',
                'city' => '铜仁市',
                'code' => '4152014470',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            433 => 
            array (
                'id' => 2434,
                'name' => '黔南民族幼儿师范高等专科学校',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014497',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            434 => 
            array (
                'id' => 2435,
                'name' => '毕节医学高等专科学校',
                'city' => '毕节市',
                'code' => '4152014499',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            435 => 
            array (
                'id' => 2436,
                'name' => '贵州建设职业技术学院',
                'city' => '贵阳市',
                'code' => '4152014516',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            436 => 
            array (
                'id' => 2437,
                'name' => '毕节幼儿师范高等专科学校',
                'city' => '毕节市',
                'code' => '4152014538',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            437 => 
            array (
                'id' => 2438,
                'name' => '贵州农业职业学院',
                'city' => '贵阳市',
                'code' => '4152014549',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            438 => 
            array (
                'id' => 2439,
                'name' => '贵州工程职业学院',
                'city' => '铜仁市',
                'code' => '4152014558',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            439 => 
            array (
                'id' => 2440,
                'name' => '贵州工贸职业学院',
                'city' => '毕节市',
                'code' => '4152014559',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            440 => 
            array (
                'id' => 2441,
                'name' => '贵州水利水电职业技术学院',
                'city' => '贵阳市',
                'code' => '4152014577',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            441 => 
            array (
                'id' => 2442,
                'name' => '贵州电子商务职业技术学院',
                'city' => '贵阳市',
                'code' => '4152014578',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            442 => 
            array (
                'id' => 2443,
                'name' => '贵州应用技术职业学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014579',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            443 => 
            array (
                'id' => 2444,
                'name' => '贵州电子科技职业学院',
                'city' => '贵阳市',
                'code' => '4152014580',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            444 => 
            array (
                'id' => 2445,
                'name' => '贵州装备制造职业学院',
                'city' => '贵阳市',
                'code' => '4152014613',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            445 => 
            array (
                'id' => 2446,
                'name' => '贵州健康职业学院',
                'city' => '铜仁市',
                'code' => '4152014614',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            446 => 
            array (
                'id' => 2447,
                'name' => '贵州食品工程职业学院',
                'city' => '贵阳市',
                'code' => '4152014615',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            447 => 
            array (
                'id' => 2448,
                'name' => '贵州经贸职业技术学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014616',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            448 => 
            array (
                'id' => 2449,
                'name' => '贵州护理职业技术学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014617',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            449 => 
            array (
                'id' => 2450,
                'name' => '六盘水幼儿师范高等专科学校',
                'city' => '六盘水市',
                'code' => '4152014630',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            450 => 
            array (
                'id' => 2451,
                'name' => '毕节工业职业技术学院',
                'city' => '毕节市',
                'code' => '4152014648',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            451 => 
            array (
                'id' => 2452,
                'name' => '贵州机电职业技术学院',
                'city' => '黔南布依族苗族自治州',
                'code' => '4152014733',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            452 => 
            array (
                'id' => 2453,
                'name' => '贵州财经职业学院',
                'city' => '贵阳市',
                'code' => '4152014734',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            453 => 
            array (
                'id' => 2454,
                'name' => '贵州民用航空职业学院',
                'city' => '安顺市',
                'code' => '4152014735',
                'supervisor' => '贵州省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            454 => 
            array (
                'id' => 2455,
                'name' => '贵州航空职业技术学院',
                'city' => '贵阳市',
                'code' => '4252050963',
                'supervisor' => '贵州省',
                'level' => '专科',
                'type' => '公办',
            ),
            455 => 
            array (
                'id' => 2456,
                'name' => '云南大学',
                'city' => '昆明市',
                'code' => '4153010673',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            456 => 
            array (
                'id' => 2457,
                'name' => '昆明理工大学',
                'city' => '昆明市',
                'code' => '4153010674',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            457 => 
            array (
                'id' => 2458,
                'name' => '云南农业大学',
                'city' => '昆明市',
                'code' => '4153010676',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            458 => 
            array (
                'id' => 2459,
                'name' => '西南林业大学',
                'city' => '昆明市',
                'code' => '4153010677',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            459 => 
            array (
                'id' => 2460,
                'name' => '昆明医科大学',
                'city' => '昆明市',
                'code' => '4153010678',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            460 => 
            array (
                'id' => 2461,
                'name' => '大理大学',
                'city' => '大理白族自治州',
                'code' => '4153010679',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            461 => 
            array (
                'id' => 2462,
                'name' => '云南中医药大学',
                'city' => '昆明市',
                'code' => '4153010680',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            462 => 
            array (
                'id' => 2463,
                'name' => '云南师范大学',
                'city' => '昆明市',
                'code' => '4153010681',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            463 => 
            array (
                'id' => 2464,
                'name' => '昭通学院',
                'city' => '昭通市',
                'code' => '4153010683',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            464 => 
            array (
                'id' => 2465,
                'name' => '曲靖师范学院',
                'city' => '曲靖市',
                'code' => '4153010684',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            465 => 
            array (
                'id' => 2466,
                'name' => '普洱学院',
                'city' => '普洱市',
                'code' => '4153010685',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            466 => 
            array (
                'id' => 2467,
                'name' => '保山学院',
                'city' => '保山市',
                'code' => '4153010686',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            467 => 
            array (
                'id' => 2468,
                'name' => '红河学院',
                'city' => '红河哈尼族彝族自治州',
                'code' => '4153010687',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            468 => 
            array (
                'id' => 2469,
                'name' => '云南财经大学',
                'city' => '昆明市',
                'code' => '4153010689',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            469 => 
            array (
                'id' => 2470,
                'name' => '云南艺术学院',
                'city' => '昆明市',
                'code' => '4153010690',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            470 => 
            array (
                'id' => 2471,
                'name' => '云南民族大学',
                'city' => '昆明市',
                'code' => '4153010691',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            471 => 
            array (
                'id' => 2472,
                'name' => '玉溪师范学院',
                'city' => '玉溪市',
                'code' => '4153011390',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            472 => 
            array (
                'id' => 2473,
                'name' => '楚雄师范学院',
                'city' => '楚雄彝族自治州',
                'code' => '4153011391',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            473 => 
            array (
                'id' => 2474,
                'name' => '云南警官学院',
                'city' => '昆明市',
                'code' => '4153011392',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            474 => 
            array (
                'id' => 2475,
                'name' => '昆明学院',
                'city' => '昆明市',
                'code' => '4153011393',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            475 => 
            array (
                'id' => 2476,
                'name' => '文山学院',
                'city' => '文山壮族苗族自治州',
                'code' => '4153011556',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            476 => 
            array (
                'id' => 2477,
                'name' => '云南经济管理学院',
                'city' => '昆明市',
                'code' => '4153012560',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            477 => 
            array (
                'id' => 2478,
                'name' => '云南大学滇池学院',
                'city' => '昆明市',
                'code' => '4153013326',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            478 => 
            array (
                'id' => 2479,
                'name' => '云南大学旅游文化学院',
                'city' => '丽江市',
                'code' => '4153013328',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            479 => 
            array (
                'id' => 2480,
                'name' => '昆明理工大学津桥学院',
                'city' => '昆明市',
                'code' => '4153013329',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            480 => 
            array (
                'id' => 2481,
                'name' => '云南师范大学商学院',
                'city' => '昆明市',
                'code' => '4153013330',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            481 => 
            array (
                'id' => 2482,
                'name' => '云南师范大学文理学院',
                'city' => '昆明市',
                'code' => '4153013331',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            482 => 
            array (
                'id' => 2483,
                'name' => '昆明医科大学海源学院',
                'city' => '昆明市',
                'code' => '4153013332',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            483 => 
            array (
                'id' => 2484,
                'name' => '云南艺术学院文华学院',
                'city' => '昆明市',
                'code' => '4153013333',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            484 => 
            array (
                'id' => 2485,
                'name' => '云南工商学院',
                'city' => '昆明市',
                'code' => '4153013909',
                'supervisor' => '云南省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            485 => 
            array (
                'id' => 2486,
                'name' => '滇西科技师范学院',
                'city' => '临沧市',
                'code' => '4153014092',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            486 => 
            array (
                'id' => 2487,
                'name' => '滇西应用技术大学',
                'city' => '大理市',
                'code' => '4153014623',
                'supervisor' => '云南省',
                'level' => '本科',
                'type' => '公办',
            ),
            487 => 
            array (
                'id' => 2488,
                'name' => '昆明冶金高等专科学校',
                'city' => '昆明市',
                'code' => '4153011557',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            488 => 
            array (
                'id' => 2489,
                'name' => '云南国土资源职业学院',
                'city' => '昆明市',
                'code' => '4153012349',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            489 => 
            array (
                'id' => 2490,
                'name' => '云南交通职业技术学院',
                'city' => '昆明市',
                'code' => '4153012357',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            490 => 
            array (
                'id' => 2491,
                'name' => '昆明工业职业技术学院',
                'city' => '昆明市',
                'code' => '4153012393',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            491 => 
            array (
                'id' => 2492,
                'name' => '云南农业职业技术学院',
                'city' => '昆明市',
                'code' => '4153012555',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            492 => 
            array (
                'id' => 2493,
                'name' => '云南司法警官职业学院',
                'city' => '昆明市',
                'code' => '4153012556',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            493 => 
            array (
                'id' => 2494,
                'name' => '云南文化艺术职业学院',
                'city' => '昆明市',
                'code' => '4153012558',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            494 => 
            array (
                'id' => 2495,
                'name' => '云南体育运动职业技术学院',
                'city' => '昆明市',
                'code' => '4153012559',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            495 => 
            array (
                'id' => 2496,
                'name' => '云南科技信息职业学院',
                'city' => '昆明市',
                'code' => '4153012825',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            496 => 
            array (
                'id' => 2497,
                'name' => '西双版纳职业技术学院',
                'city' => '西双版纳傣族自治州',
                'code' => '4153012826',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            497 => 
            array (
                'id' => 2498,
                'name' => '昆明艺术职业学院',
                'city' => '昆明市',
                'code' => '4153012851',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            498 => 
            array (
                'id' => 2499,
                'name' => '玉溪农业职业技术学院',
                'city' => '玉溪市',
                'code' => '4153012971',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            499 => 
            array (
                'id' => 2500,
                'name' => '云南能源职业技术学院',
                'city' => '曲靖市',
                'code' => '4153013136',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'name' => '云南国防工业职业技术学院',
                'city' => '昆明市',
                'code' => '4153013756',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            1 => 
            array (
                'id' => 2502,
                'name' => '云南机电职业技术学院',
                'city' => '昆明市',
                'code' => '4153013757',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            2 => 
            array (
                'id' => 2503,
                'name' => '云南林业职业技术学院',
                'city' => '昆明市',
                'code' => '4153013758',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            3 => 
            array (
                'id' => 2504,
                'name' => '云南城市建设职业学院',
                'city' => '昆明市',
                'code' => '4153013759',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            4 => 
            array (
                'id' => 2505,
                'name' => '云南工程职业学院',
                'city' => '昆明市',
                'code' => '4153013761',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            5 => 
            array (
                'id' => 2506,
                'name' => '曲靖医学高等专科学校',
                'city' => '曲靖市',
                'code' => '4153014012',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            6 => 
            array (
                'id' => 2507,
                'name' => '楚雄医药高等专科学校',
                'city' => '楚雄彝族自治州',
                'code' => '4153014013',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            7 => 
            array (
                'id' => 2508,
                'name' => '保山中医药高等专科学校',
                'city' => '保山市',
                'code' => '4153014014',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            8 => 
            array (
                'id' => 2509,
                'name' => '丽江师范高等专科学校',
                'city' => '丽江市',
                'code' => '4153014015',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            9 => 
            array (
                'id' => 2510,
                'name' => '德宏师范高等专科学校',
                'city' => '德宏傣族景颇族自治州',
                'code' => '4153014016',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            10 => 
            array (
                'id' => 2511,
                'name' => '云南新兴职业学院',
                'city' => '昆明市',
                'code' => '4153014032',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            11 => 
            array (
                'id' => 2512,
                'name' => '云南锡业职业技术学院',
                'city' => '红河哈尼族彝族自治州',
                'code' => '4153014130',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            12 => 
            array (
                'id' => 2513,
                'name' => '云南经贸外事职业学院',
                'city' => '昆明市',
                'code' => '4153014212',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            13 => 
            array (
                'id' => 2514,
                'name' => '云南三鑫职业技术学院',
                'city' => '文山壮族苗族自治州',
                'code' => '4153014239',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            14 => 
            array (
                'id' => 2515,
                'name' => '德宏职业学院',
                'city' => '德宏傣族景颇族自治州',
                'code' => '4153014253',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            15 => 
            array (
                'id' => 2516,
                'name' => '云南商务职业学院',
                'city' => '昆明市',
                'code' => '4153014317',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            16 => 
            array (
                'id' => 2517,
                'name' => '昆明卫生职业学院',
                'city' => '昆明市',
                'code' => '4153014372',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            17 => 
            array (
                'id' => 2518,
                'name' => '云南现代职业技术学院',
                'city' => '楚雄彝族自治州',
                'code' => '4153014373',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            18 => 
            array (
                'id' => 2519,
                'name' => '云南旅游职业学院',
                'city' => '昆明市',
                'code' => '4153014381',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            19 => 
            array (
                'id' => 2520,
                'name' => '红河卫生职业学院',
                'city' => '红河哈尼族彝族自治州',
                'code' => '4153014413',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            20 => 
            array (
                'id' => 2521,
                'name' => '云南外事外语职业学院',
                'city' => '昆明市',
                'code' => '4153014415',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            21 => 
            array (
                'id' => 2522,
                'name' => '大理农林职业技术学院',
                'city' => '大理白族自治州',
                'code' => '4153014487',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            22 => 
            array (
                'id' => 2523,
                'name' => '公安消防部队高等专科学校',
                'city' => '昆明市',
                'code' => '4153014534',
                'supervisor' => '应急管理部',
                'level' => '专科',
                'type' => '公办',
            ),
            23 => 
            array (
                'id' => 2524,
                'name' => '云南财经职业学院',
                'city' => '昆明市',
                'code' => '4153014550',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            24 => 
            array (
                'id' => 2525,
                'name' => '昆明铁道职业技术学院',
                'city' => '昆明市',
                'code' => '4153014581',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            25 => 
            array (
                'id' => 2526,
                'name' => '昭通卫生职业学院',
                'city' => '昭通市',
                'code' => '4153014582',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            26 => 
            array (
                'id' => 2527,
                'name' => '大理护理职业学院',
                'city' => '大理白族自治州',
                'code' => '4153014583',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            27 => 
            array (
                'id' => 2528,
                'name' => '云南水利水电职业学院',
                'city' => '昆明市',
                'code' => '4153014584',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            28 => 
            array (
                'id' => 2529,
                'name' => '云南轻纺职业学院',
                'city' => '昆明市',
                'code' => '4153014618',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            29 => 
            array (
                'id' => 2530,
                'name' => '云南特殊教育职业学院',
                'city' => '昆明市',
                'code' => '4153014619',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            30 => 
            array (
                'id' => 2531,
                'name' => '云南工贸职业技术学院',
                'city' => '昆明市',
                'code' => '4153014620',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            31 => 
            array (
                'id' => 2532,
                'name' => '云南交通运输职业学院',
                'city' => '昆明市',
                'code' => '4153014621',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            32 => 
            array (
                'id' => 2533,
                'name' => '昆明幼儿师范高等专科学校',
                'city' => '昆明市',
                'code' => '4153014631',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            33 => 
            array (
                'id' => 2534,
                'name' => '云南医药健康职业学院',
                'city' => '昆明市',
                'code' => '4153014649',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            34 => 
            array (
                'id' => 2535,
                'name' => '云南理工职业学院',
                'city' => '昆明市',
                'code' => '4153014675',
                'supervisor' => '云南省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            35 => 
            array (
                'id' => 2536,
                'name' => '曲靖职业技术学院',
                'city' => '曲靖市',
                'code' => '4153014676',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            36 => 
            array (
                'id' => 2537,
                'name' => '红河职业技术学院',
                'city' => '红河州',
                'code' => '4153014736',
                'supervisor' => '云南省',
                'level' => '专科',
                'type' => '公办',
            ),
            37 => 
            array (
                'id' => 2538,
                'name' => '西藏农牧学院',
                'city' => '林芝市',
                'code' => '4154010693',
                'supervisor' => '西藏自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            38 => 
            array (
                'id' => 2539,
                'name' => '西藏大学',
                'city' => '拉萨市',
                'code' => '4154010694',
                'supervisor' => '西藏自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            39 => 
            array (
                'id' => 2540,
                'name' => '西藏民族大学',
                'city' => '咸阳市',
                'code' => '4154010695',
                'supervisor' => '西藏自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            40 => 
            array (
                'id' => 2541,
                'name' => '西藏藏医药大学',
                'city' => '拉萨市',
                'code' => '4154010696',
                'supervisor' => '西藏自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            41 => 
            array (
                'id' => 2542,
                'name' => '西藏警官高等专科学校',
                'city' => '拉萨市',
                'code' => '4154010692',
                'supervisor' => '西藏自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            42 => 
            array (
                'id' => 2543,
                'name' => '拉萨师范高等专科学校',
                'city' => '拉萨市',
                'code' => '4154012481',
                'supervisor' => '西藏自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            43 => 
            array (
                'id' => 2544,
                'name' => '西藏职业技术学院',
                'city' => '拉萨市',
                'code' => '4154014085',
                'supervisor' => '西藏自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            44 => 
            array (
                'id' => 2545,
                'name' => '西北大学',
                'city' => '西安市',
                'code' => '4161010697',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            45 => 
            array (
                'id' => 2546,
                'name' => '西安交通大学',
                'city' => '西安市',
                'code' => '4161010698',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            46 => 
            array (
                'id' => 2547,
                'name' => '西北工业大学',
                'city' => '西安市',
                'code' => '4161010699',
                'supervisor' => '工业和信息化部',
                'level' => '本科',
                'type' => '公办',
            ),
            47 => 
            array (
                'id' => 2548,
                'name' => '西安理工大学',
                'city' => '西安市',
                'code' => '4161010700',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            48 => 
            array (
                'id' => 2549,
                'name' => '西安电子科技大学',
                'city' => '西安市',
                'code' => '4161010701',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            49 => 
            array (
                'id' => 2550,
                'name' => '西安工业大学',
                'city' => '西安市',
                'code' => '4161010702',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            50 => 
            array (
                'id' => 2551,
                'name' => '西安建筑科技大学',
                'city' => '西安市',
                'code' => '4161010703',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            51 => 
            array (
                'id' => 2552,
                'name' => '西安科技大学',
                'city' => '西安市',
                'code' => '4161010704',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            52 => 
            array (
                'id' => 2553,
                'name' => '西安石油大学',
                'city' => '西安市',
                'code' => '4161010705',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            53 => 
            array (
                'id' => 2554,
                'name' => '陕西科技大学',
                'city' => '西安市',
                'code' => '4161010708',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            54 => 
            array (
                'id' => 2555,
                'name' => '西安工程大学',
                'city' => '西安市',
                'code' => '4161010709',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            55 => 
            array (
                'id' => 2556,
                'name' => '长安大学',
                'city' => '西安市',
                'code' => '4161010710',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            56 => 
            array (
                'id' => 2557,
                'name' => '西北农林科技大学',
                'city' => '咸阳市',
                'code' => '4161010712',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            57 => 
            array (
                'id' => 2558,
                'name' => '陕西中医药大学',
                'city' => '咸阳市',
                'code' => '4161010716',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            58 => 
            array (
                'id' => 2559,
                'name' => '陕西师范大学',
                'city' => '西安市',
                'code' => '4161010718',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            59 => 
            array (
                'id' => 2560,
                'name' => '延安大学',
                'city' => '延安市',
                'code' => '4161010719',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            60 => 
            array (
                'id' => 2561,
                'name' => '陕西理工大学',
                'city' => '汉中市',
                'code' => '4161010720',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            61 => 
            array (
                'id' => 2562,
                'name' => '宝鸡文理学院',
                'city' => '宝鸡市',
                'code' => '4161010721',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            62 => 
            array (
                'id' => 2563,
                'name' => '咸阳师范学院',
                'city' => '咸阳市',
                'code' => '4161010722',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            63 => 
            array (
                'id' => 2564,
                'name' => '渭南师范学院',
                'city' => '渭南市',
                'code' => '4161010723',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            64 => 
            array (
                'id' => 2565,
                'name' => '西安外国语大学',
                'city' => '西安市',
                'code' => '4161010724',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            65 => 
            array (
                'id' => 2566,
                'name' => '西北政法大学',
                'city' => '西安市',
                'code' => '4161010726',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            66 => 
            array (
                'id' => 2567,
                'name' => '西安体育学院',
                'city' => '西安市',
                'code' => '4161010727',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            67 => 
            array (
                'id' => 2568,
                'name' => '西安音乐学院',
                'city' => '西安市',
                'code' => '4161010728',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            68 => 
            array (
                'id' => 2569,
                'name' => '西安美术学院',
                'city' => '西安市',
                'code' => '4161010729',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            69 => 
            array (
                'id' => 2570,
                'name' => '西安文理学院',
                'city' => '西安市',
                'code' => '4161011080',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            70 => 
            array (
                'id' => 2571,
                'name' => '榆林学院',
                'city' => '榆林市',
                'code' => '4161011395',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            71 => 
            array (
                'id' => 2572,
                'name' => '商洛学院',
                'city' => '商洛市',
                'code' => '4161011396',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            72 => 
            array (
                'id' => 2573,
                'name' => '安康学院',
                'city' => '安康市',
                'code' => '4161011397',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            73 => 
            array (
                'id' => 2574,
                'name' => '西安培华学院',
                'city' => '西安市',
                'code' => '4161011400',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            74 => 
            array (
                'id' => 2575,
                'name' => '西安财经大学',
                'city' => '西安市',
                'code' => '4161011560',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            75 => 
            array (
                'id' => 2576,
                'name' => '西安邮电大学',
                'city' => '西安市',
                'code' => '4161011664',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            76 => 
            array (
                'id' => 2577,
                'name' => '西安航空学院',
                'city' => '西安市',
                'code' => '4161011736',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            77 => 
            array (
                'id' => 2578,
                'name' => '西安医学院',
                'city' => '西安市',
                'code' => '4161011840',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            78 => 
            array (
                'id' => 2579,
                'name' => '西安欧亚学院',
                'city' => '西安市',
                'code' => '4161012712',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            79 => 
            array (
                'id' => 2580,
                'name' => '西安外事学院',
                'city' => '西安市',
                'code' => '4161012713',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            80 => 
            array (
                'id' => 2581,
                'name' => '西安翻译学院',
                'city' => '西安市',
                'code' => '4161012714',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            81 => 
            array (
                'id' => 2582,
                'name' => '西京学院',
                'city' => '西安市',
                'code' => '4161012715',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            82 => 
            array (
                'id' => 2583,
                'name' => '西安思源学院',
                'city' => '西安市',
                'code' => '4161013121',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            83 => 
            array (
                'id' => 2584,
                'name' => '陕西国际商贸学院',
                'city' => '咸阳市',
                'code' => '4161013123',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            84 => 
            array (
                'id' => 2585,
                'name' => '陕西服装工程学院',
                'city' => '咸阳市',
                'code' => '4161013125',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            85 => 
            array (
                'id' => 2586,
                'name' => '西安交通工程学院',
                'city' => '西安市',
                'code' => '4161013569',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            86 => 
            array (
                'id' => 2587,
                'name' => '西安交通大学城市学院',
                'city' => '西安市',
                'code' => '4161013677',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            87 => 
            array (
                'id' => 2588,
                'name' => '西北大学现代学院',
                'city' => '西安市',
                'code' => '4161013678',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            88 => 
            array (
                'id' => 2589,
                'name' => '西安建筑科技大学华清学院',
                'city' => '西安市',
                'code' => '4161013679',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            89 => 
            array (
                'id' => 2590,
                'name' => '西安财经大学行知学院',
                'city' => '西安市',
                'code' => '4161013680',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            90 => 
            array (
                'id' => 2591,
                'name' => '陕西科技大学镐京学院',
                'city' => '咸阳市',
                'code' => '4161013681',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            91 => 
            array (
                'id' => 2592,
                'name' => '西安工商学院',
                'city' => '西安市',
                'code' => '4161013682',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            92 => 
            array (
                'id' => 2593,
                'name' => '延安大学西安创新学院',
                'city' => '西安市',
                'code' => '4161013683',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            93 => 
            array (
                'id' => 2594,
                'name' => '西安电子科技大学长安学院',
                'city' => '西安市',
                'code' => '4161013685',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            94 => 
            array (
                'id' => 2595,
                'name' => '西安汽车职业大学',
                'city' => '西安市',
                'code' => '4161013738',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            95 => 
            array (
                'id' => 2596,
                'name' => '西安明德理工学院',
                'city' => '西安市',
                'code' => '4161013894',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            96 => 
            array (
                'id' => 2597,
                'name' => '西安信息职业大学',
                'city' => '西安市',
                'code' => '4161014030',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            97 => 
            array (
                'id' => 2598,
                'name' => '长安大学兴华学院',
                'city' => '西安市',
                'code' => '4161014034',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            98 => 
            array (
                'id' => 2599,
                'name' => '西安理工大学高科学院',
                'city' => '西安市',
                'code' => '4161014041',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            99 => 
            array (
                'id' => 2600,
                'name' => '西安科技大学高新学院',
                'city' => '西安市',
                'code' => '4161014042',
                'supervisor' => '陕西省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            100 => 
            array (
                'id' => 2601,
                'name' => '陕西学前师范学院',
                'city' => '西安市',
                'code' => '4161014390',
                'supervisor' => '陕西省',
                'level' => '本科',
                'type' => '公办',
            ),
            101 => 
            array (
                'id' => 2602,
                'name' => '陕西工业职业技术学院',
                'city' => '咸阳市',
                'code' => '4161010828',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            102 => 
            array (
                'id' => 2603,
                'name' => '杨凌职业技术学院',
                'city' => '咸阳市',
                'code' => '4161010966',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            103 => 
            array (
                'id' => 2604,
                'name' => '西安电力高等专科学校',
                'city' => '西安市',
                'code' => '4161011826',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            104 => 
            array (
                'id' => 2605,
                'name' => '陕西能源职业技术学院',
                'city' => '咸阳市',
                'code' => '4161012510',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            105 => 
            array (
                'id' => 2606,
                'name' => '陕西国防工业职业技术学院',
                'city' => '西安市',
                'code' => '4161012827',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            106 => 
            array (
                'id' => 2607,
                'name' => '西安航空职业技术学院',
                'city' => '西安市',
                'code' => '4161012828',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            107 => 
            array (
                'id' => 2608,
                'name' => '陕西财经职业技术学院',
                'city' => '咸阳市',
                'code' => '4161012829',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            108 => 
            array (
                'id' => 2609,
                'name' => '陕西交通职业技术学院',
                'city' => '西安市',
                'code' => '4161012830',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            109 => 
            array (
                'id' => 2610,
                'name' => '陕西职业技术学院',
                'city' => '西安市',
                'code' => '4161012831',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            110 => 
            array (
                'id' => 2611,
                'name' => '西安高新科技职业学院',
                'city' => '西安市',
                'code' => '4161013122',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            111 => 
            array (
                'id' => 2612,
                'name' => '西安城市建设职业学院',
                'city' => '西安市',
                'code' => '4161013124',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            112 => 
            array (
                'id' => 2613,
                'name' => '陕西铁路工程职业技术学院',
                'city' => '渭南市',
                'code' => '4161013566',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            113 => 
            array (
                'id' => 2614,
                'name' => '宝鸡职业技术学院',
                'city' => '宝鸡市',
                'code' => '4161013567',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            114 => 
            array (
                'id' => 2615,
                'name' => '陕西航空职业技术学院',
                'city' => '汉中市',
                'code' => '4161013568',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            115 => 
            array (
                'id' => 2616,
                'name' => '陕西电子信息职业技术学院',
                'city' => '西安市',
                'code' => '4161013570',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            116 => 
            array (
                'id' => 2617,
                'name' => '陕西邮电职业技术学院',
                'city' => '咸阳市',
                'code' => '4161013736',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            117 => 
            array (
                'id' => 2618,
                'name' => '西安海棠职业学院',
                'city' => '西安市',
                'code' => '4161013737',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            118 => 
            array (
                'id' => 2619,
                'name' => '西安健康工程职业学院',
                'city' => '西安市',
                'code' => '4161013739',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            119 => 
            array (
                'id' => 2620,
                'name' => '陕西警官职业学院',
                'city' => '西安市',
                'code' => '4161013819',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            120 => 
            array (
                'id' => 2621,
                'name' => '陕西经济管理职业技术学院',
                'city' => '西安市',
                'code' => '4161013932',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            121 => 
            array (
                'id' => 2622,
                'name' => '西安铁路职业技术学院',
                'city' => '西安市',
                'code' => '4161013945',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            122 => 
            array (
                'id' => 2623,
                'name' => '咸阳职业技术学院',
                'city' => '咸阳市',
                'code' => '4161013946',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            123 => 
            array (
                'id' => 2624,
                'name' => '西安职业技术学院',
                'city' => '西安市',
                'code' => '4161013947',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            124 => 
            array (
                'id' => 2625,
                'name' => '商洛职业技术学院',
                'city' => '商洛市',
                'code' => '4161013948',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            125 => 
            array (
                'id' => 2626,
                'name' => '汉中职业技术学院',
                'city' => '汉中市',
                'code' => '4161013949',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            126 => 
            array (
                'id' => 2627,
                'name' => '延安职业技术学院',
                'city' => '延安市',
                'code' => '4161013950',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            127 => 
            array (
                'id' => 2628,
                'name' => '渭南职业技术学院',
                'city' => '渭南市',
                'code' => '4161013951',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            128 => 
            array (
                'id' => 2629,
                'name' => '安康职业技术学院',
                'city' => '安康市',
                'code' => '4161013952',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            129 => 
            array (
                'id' => 2630,
                'name' => '铜川职业技术学院',
                'city' => '铜川市',
                'code' => '4161013953',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            130 => 
            array (
                'id' => 2631,
                'name' => '陕西青年职业学院',
                'city' => '西安市',
                'code' => '4161014028',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            131 => 
            array (
                'id' => 2632,
                'name' => '陕西工商职业学院',
                'city' => '西安市',
                'code' => '4161014029',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            132 => 
            array (
                'id' => 2633,
                'name' => '陕西旅游烹饪职业学院',
                'city' => '西安市',
                'code' => '4161014031',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            133 => 
            array (
                'id' => 2634,
                'name' => '西安医学高等专科学校',
                'city' => '西安市',
                'code' => '4161014222',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            134 => 
            array (
                'id' => 2635,
                'name' => '榆林职业技术学院',
                'city' => '榆林市',
                'code' => '4161014318',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            135 => 
            array (
                'id' => 2636,
                'name' => '陕西艺术职业学院',
                'city' => '西安市',
                'code' => '4161014488',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            136 => 
            array (
                'id' => 2637,
                'name' => '神木职业技术学院',
                'city' => '神木市',
                'code' => '4161014650',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            137 => 
            array (
                'id' => 2638,
                'name' => '宝鸡三和职业学院',
                'city' => '宝鸡市',
                'code' => '4161014651',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            138 => 
            array (
                'id' => 2639,
                'name' => '榆林能源科技职业学院',
                'city' => '榆林市',
                'code' => '4161014737',
                'supervisor' => '陕西省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            139 => 
            array (
                'id' => 2640,
                'name' => '陕西机电职业技术学院',
                'city' => '宝鸡市',
                'code' => '4261050084',
                'supervisor' => '陕西省',
                'level' => '专科',
                'type' => '公办',
            ),
            140 => 
            array (
                'id' => 2641,
                'name' => '中国人民解放军陆军边海防学院',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '解放军陆军',
                'level' => NULL,
                'type' => NULL,
            ),
            141 => 
            array (
                'id' => 2642,
                'name' => '中国人民解放军空军工程大学',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            142 => 
            array (
                'id' => 2643,
                'name' => '中国人民解放军空军西安飞行学院',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            143 => 
            array (
                'id' => 2644,
                'name' => '中国人民解放军空军军医大学',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '解放军空军',
                'level' => NULL,
                'type' => NULL,
            ),
            144 => 
            array (
                'id' => 2645,
                'name' => '中国人民解放军火箭军工程大学',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '解放军火箭军',
                'level' => NULL,
                'type' => NULL,
            ),
            145 => 
            array (
                'id' => 2646,
                'name' => '中国人民武装警察部队工程大学',
                'city' => '西安市',
                'code' => NULL,
                'supervisor' => '武警总部',
                'level' => NULL,
                'type' => NULL,
            ),
            146 => 
            array (
                'id' => 2647,
                'name' => '兰州大学',
                'city' => '兰州市',
                'code' => '4162010730',
                'supervisor' => '教育部',
                'level' => '本科',
                'type' => '公办',
            ),
            147 => 
            array (
                'id' => 2648,
                'name' => '兰州理工大学',
                'city' => '兰州市',
                'code' => '4162010731',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            148 => 
            array (
                'id' => 2649,
                'name' => '兰州交通大学',
                'city' => '兰州市',
                'code' => '4162010732',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            149 => 
            array (
                'id' => 2650,
                'name' => '甘肃农业大学',
                'city' => '兰州市',
                'code' => '4162010733',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            150 => 
            array (
                'id' => 2651,
                'name' => '甘肃中医药大学',
                'city' => '兰州市',
                'code' => '4162010735',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            151 => 
            array (
                'id' => 2652,
                'name' => '西北师范大学',
                'city' => '兰州市',
                'code' => '4162010736',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            152 => 
            array (
                'id' => 2653,
                'name' => '兰州城市学院',
                'city' => '兰州市',
                'code' => '4162010737',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            153 => 
            array (
                'id' => 2654,
                'name' => '陇东学院',
                'city' => '庆阳市',
                'code' => '4162010738',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            154 => 
            array (
                'id' => 2655,
                'name' => '天水师范学院',
                'city' => '天水市',
                'code' => '4162010739',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            155 => 
            array (
                'id' => 2656,
                'name' => '河西学院',
                'city' => '张掖市',
                'code' => '4162010740',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            156 => 
            array (
                'id' => 2657,
                'name' => '兰州财经大学',
                'city' => '兰州市',
                'code' => '4162010741',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            157 => 
            array (
                'id' => 2658,
                'name' => '西北民族大学',
                'city' => '兰州市',
                'code' => '4162010742',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            158 => 
            array (
                'id' => 2659,
                'name' => '甘肃政法大学',
                'city' => '兰州市',
                'code' => '4162011406',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            159 => 
            array (
                'id' => 2660,
                'name' => '甘肃民族师范学院',
                'city' => '甘南藏族自治州',
                'code' => '4162011561',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            160 => 
            array (
                'id' => 2661,
                'name' => '兰州文理学院',
                'city' => '兰州市',
                'code' => '4162011562',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            161 => 
            array (
                'id' => 2662,
                'name' => '甘肃医学院',
                'city' => '平凉市',
                'code' => '4162011805',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            162 => 
            array (
                'id' => 2663,
                'name' => '兰州工业学院',
                'city' => '兰州市',
                'code' => '4162011807',
                'supervisor' => '甘肃省',
                'level' => '本科',
                'type' => '公办',
            ),
            163 => 
            array (
                'id' => 2664,
                'name' => '西北师范大学知行学院',
                'city' => '兰州市',
                'code' => '4162013510',
                'supervisor' => '甘肃省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            164 => 
            array (
                'id' => 2665,
                'name' => '兰州财经大学陇桥学院',
                'city' => '兰州市',
                'code' => '4162013511',
                'supervisor' => '甘肃省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            165 => 
            array (
                'id' => 2666,
                'name' => '兰州财经大学长青学院',
                'city' => '兰州市',
                'code' => '4162013512',
                'supervisor' => '甘肃省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            166 => 
            array (
                'id' => 2667,
                'name' => '兰州交通大学博文学院',
                'city' => '兰州市',
                'code' => '4162013514',
                'supervisor' => '甘肃省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            167 => 
            array (
                'id' => 2668,
                'name' => '兰州理工大学技术工程学院',
                'city' => '兰州市',
                'code' => '4162013515',
                'supervisor' => '甘肃省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            168 => 
            array (
                'id' => 2669,
                'name' => '兰州石化职业技术学院',
                'city' => '兰州市',
                'code' => '4162010838',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            169 => 
            array (
                'id' => 2670,
                'name' => '陇南师范高等专科学校',
                'city' => '陇南市',
                'code' => '4162011806',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            170 => 
            array (
                'id' => 2671,
                'name' => '定西师范高等专科学校',
                'city' => '定西市',
                'code' => '4162011808',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            171 => 
            array (
                'id' => 2672,
                'name' => '甘肃建筑职业技术学院',
                'city' => '兰州市',
                'code' => '4162012511',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            172 => 
            array (
                'id' => 2673,
                'name' => '酒泉职业技术学院',
                'city' => '酒泉市',
                'code' => '4162012539',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            173 => 
            array (
                'id' => 2674,
                'name' => '兰州外语职业学院',
                'city' => '兰州市',
                'code' => '4162012832',
                'supervisor' => '甘肃省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            174 => 
            array (
                'id' => 2675,
                'name' => '兰州职业技术学院',
                'city' => '兰州市',
                'code' => '4162012833',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            175 => 
            array (
                'id' => 2676,
                'name' => '甘肃警察职业学院',
                'city' => '兰州市',
                'code' => '4162012834',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            176 => 
            array (
                'id' => 2677,
                'name' => '甘肃林业职业技术学院',
                'city' => '天水市',
                'code' => '4162012835',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            177 => 
            array (
                'id' => 2678,
                'name' => '甘肃工业职业技术学院',
                'city' => '天水市',
                'code' => '4162012836',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            178 => 
            array (
                'id' => 2679,
                'name' => '武威职业学院',
                'city' => '武威市',
                'code' => '4162013518',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            179 => 
            array (
                'id' => 2680,
                'name' => '甘肃交通职业技术学院',
                'city' => '兰州市',
                'code' => '4162013519',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            180 => 
            array (
                'id' => 2681,
                'name' => '兰州资源环境职业技术学院',
                'city' => '兰州市',
                'code' => '4162013933',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            181 => 
            array (
                'id' => 2682,
                'name' => '甘肃农业职业技术学院',
                'city' => '兰州市',
                'code' => '4162013954',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            182 => 
            array (
                'id' => 2683,
                'name' => '甘肃畜牧工程职业技术学院',
                'city' => '武威市',
                'code' => '4162013955',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            183 => 
            array (
                'id' => 2684,
                'name' => '甘肃钢铁职业技术学院',
                'city' => '嘉峪关市',
                'code' => '4162014131',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            184 => 
            array (
                'id' => 2685,
                'name' => '甘肃机电职业技术学院',
                'city' => '天水市',
                'code' => '4162014319',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            185 => 
            array (
                'id' => 2686,
                'name' => '甘肃有色冶金职业技术学院',
                'city' => '金昌市',
                'code' => '4162014375',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            186 => 
            array (
                'id' => 2687,
                'name' => '白银矿冶职业技术学院',
                'city' => '白银市',
                'code' => '4162014376',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            187 => 
            array (
                'id' => 2688,
                'name' => '甘肃卫生职业学院',
                'city' => '兰州市',
                'code' => '4162014517',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            188 => 
            array (
                'id' => 2689,
                'name' => '兰州科技职业学院',
                'city' => '兰州市',
                'code' => '4162014518',
                'supervisor' => '甘肃省教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            189 => 
            array (
                'id' => 2690,
                'name' => '庆阳职业技术学院',
                'city' => '庆阳市',
                'code' => '4162014551',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            190 => 
            array (
                'id' => 2691,
                'name' => '临夏现代职业学院',
                'city' => '临夏州',
                'code' => '4162014552',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            191 => 
            array (
                'id' => 2692,
                'name' => '甘肃能源化工职业学院',
                'city' => '兰州市',
                'code' => '4162014593',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            192 => 
            array (
                'id' => 2693,
                'name' => '兰州现代职业学院',
                'city' => '兰州市',
                'code' => '4162014594',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            193 => 
            array (
                'id' => 2694,
                'name' => '平凉职业技术学院',
                'city' => '平凉市',
                'code' => '4162014595',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            194 => 
            array (
                'id' => 2695,
                'name' => '培黎职业学院',
                'city' => '张掖市',
                'code' => '4162014738',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            195 => 
            array (
                'id' => 2696,
                'name' => '甘肃财贸职业学院',
                'city' => '兰州市',
                'code' => '4262051378',
                'supervisor' => '甘肃省',
                'level' => '专科',
                'type' => '公办',
            ),
            196 => 
            array (
                'id' => 2697,
                'name' => '青海大学',
                'city' => '西宁市',
                'code' => '4163010743',
                'supervisor' => '青海省',
                'level' => '本科',
                'type' => '公办',
            ),
            197 => 
            array (
                'id' => 2698,
                'name' => '青海师范大学',
                'city' => '西宁市',
                'code' => '4163010746',
                'supervisor' => '青海省',
                'level' => '本科',
                'type' => '公办',
            ),
            198 => 
            array (
                'id' => 2699,
                'name' => '青海民族大学',
                'city' => '西宁市',
                'code' => '4163010748',
                'supervisor' => '青海省',
                'level' => '本科',
                'type' => '公办',
            ),
            199 => 
            array (
                'id' => 2700,
                'name' => '青海大学昆仑学院',
                'city' => '西宁市',
                'code' => '4163013674',
                'supervisor' => '青海省教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            200 => 
            array (
                'id' => 2701,
                'name' => '青海卫生职业技术学院',
                'city' => '西宁市',
                'code' => '4163012562',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            201 => 
            array (
                'id' => 2702,
                'name' => '青海警官职业学院',
                'city' => '西宁市',
                'code' => '4163012852',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            202 => 
            array (
                'id' => 2703,
                'name' => '青海畜牧兽医职业技术学院',
                'city' => '西宁市',
                'code' => '4163012972',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            203 => 
            array (
                'id' => 2704,
                'name' => '青海交通职业技术学院',
                'city' => '西宁市',
                'code' => '4163012973',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            204 => 
            array (
                'id' => 2705,
                'name' => '青海建筑职业技术学院',
                'city' => '西宁市',
                'code' => '4163012974',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            205 => 
            array (
                'id' => 2706,
                'name' => '西宁城市职业技术学院',
                'city' => '西宁市',
                'code' => '4163014519',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            206 => 
            array (
                'id' => 2707,
                'name' => '青海高等职业技术学院',
                'city' => '海东市',
                'code' => '4163014520',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            207 => 
            array (
                'id' => 2708,
                'name' => '青海柴达木职业技术学院',
                'city' => '海西蒙古族藏族自治州',
                'code' => '4163014521',
                'supervisor' => '青海省',
                'level' => '专科',
                'type' => '公办',
            ),
            208 => 
            array (
                'id' => 2709,
                'name' => '宁夏大学',
                'city' => '银川市',
                'code' => '4164010749',
                'supervisor' => '宁夏回族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            209 => 
            array (
                'id' => 2710,
                'name' => '宁夏医科大学',
                'city' => '银川市',
                'code' => '4164010752',
                'supervisor' => '宁夏回族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            210 => 
            array (
                'id' => 2711,
                'name' => '宁夏师范学院',
                'city' => '固原市',
                'code' => '4164010753',
                'supervisor' => '宁夏回族自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            211 => 
            array (
                'id' => 2712,
                'name' => '北方民族大学',
                'city' => '银川市',
                'code' => '4164011407',
                'supervisor' => '国家民委',
                'level' => '本科',
                'type' => '公办',
            ),
            212 => 
            array (
                'id' => 2713,
                'name' => '宁夏理工学院',
                'city' => '石嘴山市',
                'code' => '4164012544',
                'supervisor' => '宁夏自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            213 => 
            array (
                'id' => 2714,
                'name' => '宁夏大学新华学院',
                'city' => '银川市',
                'code' => '4164013325',
                'supervisor' => '宁夏自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            214 => 
            array (
                'id' => 2715,
                'name' => '银川能源学院',
                'city' => '银川市',
                'code' => '4164013820',
                'supervisor' => '宁夏自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            215 => 
            array (
                'id' => 2716,
                'name' => '中国矿业大学银川学院',
                'city' => '银川市',
                'code' => '4164014200',
                'supervisor' => '宁夏自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            216 => 
            array (
                'id' => 2717,
                'name' => '宁夏民族职业技术学院',
                'city' => '吴忠市',
                'code' => '4164012716',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            217 => 
            array (
                'id' => 2718,
                'name' => '宁夏工业职业学院',
                'city' => '银川市',
                'code' => '4164012837',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            218 => 
            array (
                'id' => 2719,
                'name' => '宁夏职业技术学院',
                'city' => '银川市',
                'code' => '4164013086',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            219 => 
            array (
                'id' => 2720,
                'name' => '宁夏工商职业技术学院',
                'city' => '银川市',
                'code' => '4164013087',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            220 => 
            array (
                'id' => 2721,
                'name' => '宁夏财经职业技术学院',
                'city' => '银川市',
                'code' => '4164013088',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            221 => 
            array (
                'id' => 2722,
                'name' => '宁夏警官职业学院',
                'city' => '银川市',
                'code' => '4164013089',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            222 => 
            array (
                'id' => 2723,
                'name' => '宁夏建设职业技术学院',
                'city' => '银川市',
                'code' => '4164013151',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            223 => 
            array (
                'id' => 2724,
                'name' => '宁夏葡萄酒与防沙治沙职业技术学院',
                'city' => '银川市',
                'code' => '4164014377',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            224 => 
            array (
                'id' => 2725,
                'name' => '宁夏幼儿师范高等专科学校',
                'city' => '银川市',
                'code' => '4164014498',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            225 => 
            array (
                'id' => 2726,
                'name' => '宁夏艺术职业学院',
                'city' => '银川市',
                'code' => '4164014522',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            226 => 
            array (
                'id' => 2727,
                'name' => '宁夏体育职业学院',
                'city' => '银川市',
                'code' => '4164014624',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            227 => 
            array (
                'id' => 2728,
                'name' => '石嘴山工贸职业技术学院',
                'city' => '石嘴山市',
                'code' => '4164014739',
                'supervisor' => '宁夏回族自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            228 => 
            array (
                'id' => 2729,
                'name' => '新疆大学',
                'city' => '乌鲁木齐市',
                'code' => '4165010755',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            229 => 
            array (
                'id' => 2730,
                'name' => '塔里木大学',
                'city' => '阿拉尔市',
                'code' => '4165010757',
                'supervisor' => '新疆生产建设兵团',
                'level' => '本科',
                'type' => '公办',
            ),
            230 => 
            array (
                'id' => 2731,
                'name' => '新疆农业大学',
                'city' => '乌鲁木齐市',
                'code' => '4165010758',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            231 => 
            array (
                'id' => 2732,
                'name' => '石河子大学',
                'city' => '石河子市',
                'code' => '4165010759',
                'supervisor' => '新疆生产建设兵团',
                'level' => '本科',
                'type' => '公办',
            ),
            232 => 
            array (
                'id' => 2733,
                'name' => '新疆医科大学',
                'city' => '乌鲁木齐市',
                'code' => '4165010760',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            233 => 
            array (
                'id' => 2734,
                'name' => '新疆师范大学',
                'city' => '乌鲁木齐市',
                'code' => '4165010762',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            234 => 
            array (
                'id' => 2735,
                'name' => '喀什大学',
                'city' => '喀什地区',
                'code' => '4165010763',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            235 => 
            array (
                'id' => 2736,
                'name' => '伊犁师范大学',
                'city' => '伊犁哈萨克自治州',
                'code' => '4165010764',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            236 => 
            array (
                'id' => 2737,
                'name' => '新疆财经大学',
                'city' => '乌鲁木齐市',
                'code' => '4165010766',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            237 => 
            array (
                'id' => 2738,
                'name' => '新疆艺术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165010768',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            238 => 
            array (
                'id' => 2739,
                'name' => '新疆工程学院',
                'city' => '乌鲁木齐市',
                'code' => '4165010994',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            239 => 
            array (
                'id' => 2740,
                'name' => '昌吉学院',
                'city' => '昌吉回族自治州',
                'code' => '4165010997',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            240 => 
            array (
                'id' => 2741,
                'name' => '新疆警察学院',
                'city' => '乌鲁木齐市',
                'code' => '4165012734',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            241 => 
            array (
                'id' => 2742,
                'name' => '新疆理工学院',
                'city' => '阿克苏地区',
                'code' => '4165013558',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            242 => 
            array (
                'id' => 2743,
                'name' => '新疆农业大学科学技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165013559',
                'supervisor' => '新疆自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            243 => 
            array (
                'id' => 2744,
                'name' => '新疆医科大学厚博学院',
                'city' => '乌鲁木齐市',
                'code' => '4165013560',
                'supervisor' => '新疆自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            244 => 
            array (
                'id' => 2745,
                'name' => '新疆天山职业技术大学',
                'city' => '乌鲁木齐市',
                'code' => '4165013727',
                'supervisor' => '新疆自治区教育厅',
                'level' => '本科',
                'type' => '民办',
            ),
            245 => 
            array (
                'id' => 2746,
                'name' => '新疆科技学院',
                'city' => '巴音郭楞蒙古自治州',
                'code' => '4165013561',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '本科',
                'type' => '公办',
            ),
            246 => 
            array (
                'id' => 2747,
                'name' => '石河子大学科技学院',
                'city' => '石河子市',
                'code' => '4165013628',
                'supervisor' => '新疆生产建设兵团教育局',
                'level' => '本科',
                'type' => '民办',
            ),
            247 => 
            array (
                'id' => 2748,
                'name' => '和田师范专科学校',
                'city' => '和田地区',
                'code' => '4165010765',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            248 => 
            array (
                'id' => 2749,
                'name' => '新疆农业职业技术学院',
                'city' => '昌吉回族自治州',
                'code' => '4165010995',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            249 => 
            array (
                'id' => 2750,
                'name' => '乌鲁木齐职业大学',
                'city' => '乌鲁木齐市',
                'code' => '4165011565',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            250 => 
            array (
                'id' => 2751,
                'name' => '新疆维吾尔医学专科学校',
                'city' => '和田地区',
                'code' => '4165011818',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            251 => 
            array (
                'id' => 2752,
                'name' => '克拉玛依职业技术学院',
                'city' => '克拉玛依市',
                'code' => '4165012482',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            252 => 
            array (
                'id' => 2753,
                'name' => '新疆机电职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165012513',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            253 => 
            array (
                'id' => 2754,
                'name' => '新疆轻工职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165012514',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            254 => 
            array (
                'id' => 2755,
                'name' => '新疆能源职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165012570',
                'supervisor' => '新疆自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            255 => 
            array (
                'id' => 2756,
                'name' => '昌吉职业技术学院',
                'city' => '昌吉回族自治州',
                'code' => '4165012838',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            256 => 
            array (
                'id' => 2757,
                'name' => '伊犁职业技术学院',
                'city' => '伊犁哈萨克自治州',
                'code' => '4165012975',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            257 => 
            array (
                'id' => 2758,
                'name' => '阿克苏职业技术学院',
                'city' => '阿克苏地区',
                'code' => '4165013093',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            258 => 
            array (
                'id' => 2759,
                'name' => '巴音郭楞职业技术学院',
                'city' => '巴音郭楞蒙古自治州',
                'code' => '4165013094',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            259 => 
            array (
                'id' => 2760,
                'name' => '新疆建设职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165013562',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            260 => 
            array (
                'id' => 2761,
                'name' => '新疆兵团警官高等专科学校',
                'city' => '五家渠市',
                'code' => '4165013563',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            261 => 
            array (
                'id' => 2762,
                'name' => '新疆现代职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165013726',
                'supervisor' => '新疆自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            262 => 
            array (
                'id' => 2763,
                'name' => '新疆交通职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165013926',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            263 => 
            array (
                'id' => 2764,
                'name' => '新疆石河子职业技术学院',
                'city' => '石河子市',
                'code' => '4165013956',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            264 => 
            array (
                'id' => 2765,
                'name' => '新疆职业大学',
                'city' => '乌鲁木齐市',
                'code' => '4165014138',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            265 => 
            array (
                'id' => 2766,
                'name' => '新疆体育职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165014416',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            266 => 
            array (
                'id' => 2767,
                'name' => '新疆应用职业技术学院',
                'city' => '伊犁哈萨克自治州',
                'code' => '4165014417',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            267 => 
            array (
                'id' => 2768,
                'name' => '新疆师范高等专科学校',
                'city' => '乌鲁木齐市',
                'code' => '4165014421',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            268 => 
            array (
                'id' => 2769,
                'name' => '新疆铁道职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165014489',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            269 => 
            array (
                'id' => 2770,
                'name' => '新疆生产建设兵团兴新职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165014523',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            270 => 
            array (
                'id' => 2771,
                'name' => '哈密职业技术学院',
                'city' => '哈密市',
                'code' => '4165014524',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            271 => 
            array (
                'id' => 2772,
                'name' => '新疆科技职业技术学院',
                'city' => '五家渠市',
                'code' => '4165014525',
                'supervisor' => '新疆自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            272 => 
            array (
                'id' => 2773,
                'name' => '吐鲁番职业技术学院',
                'city' => '吐鲁番市',
                'code' => '4165014585',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            273 => 
            array (
                'id' => 2774,
                'name' => '博尔塔拉职业技术学院',
                'city' => '博尔塔拉蒙古自治州',
                'code' => '4165014622',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            274 => 
            array (
                'id' => 2775,
                'name' => '和田职业技术学院',
                'city' => '和田地区',
                'code' => '4165014652',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            275 => 
            array (
                'id' => 2776,
                'name' => '石河子工程职业技术学院',
                'city' => '石河子市',
                'code' => '4165014661',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            276 => 
            array (
                'id' => 2777,
                'name' => '喀什职业技术学院',
                'city' => '喀什地区',
                'code' => '4165014677',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            277 => 
            array (
                'id' => 2778,
                'name' => '克孜勒苏职业技术学院',
                'city' => '克孜勒苏柯尔克孜自治州',
                'code' => '4165014678',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            278 => 
            array (
                'id' => 2779,
                'name' => '新疆科信职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4165014679',
                'supervisor' => '新疆自治区教育厅',
                'level' => '专科',
                'type' => '民办',
            ),
            279 => 
            array (
                'id' => 2780,
                'name' => '阿勒泰职业技术学院',
                'city' => '阿勒泰地区',
                'code' => '4165014680',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            280 => 
            array (
                'id' => 2781,
                'name' => '塔城职业技术学院',
                'city' => '塔城地区',
                'code' => '4165014740',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            281 => 
            array (
                'id' => 2782,
                'name' => '塔里木职业技术学院',
                'city' => '阿拉尔市',
                'code' => '4165014741',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            282 => 
            array (
                'id' => 2783,
                'name' => '新疆工业职业技术学院',
                'city' => '乌鲁木齐市',
                'code' => '4265051060',
                'supervisor' => '新疆维吾尔自治区',
                'level' => '专科',
                'type' => '公办',
            ),
            283 => 
            array (
                'id' => 2784,
                'name' => '铁门关职业技术学院',
                'city' => '铁门关市',
                'code' => '4165014660',
                'supervisor' => '新疆生产建设兵团',
                'level' => '专科',
                'type' => '公办',
            ),
            284 => 
            array (
                'id' => 2785,
                'name' => '国立台湾大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            285 => 
            array (
                'id' => 2786,
                'name' => '国立中兴大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            286 => 
            array (
                'id' => 2787,
                'name' => '国立成功大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            287 => 
            array (
                'id' => 2788,
                'name' => '国立政治大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            288 => 
            array (
                'id' => 2789,
                'name' => '国立清华大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            289 => 
            array (
                'id' => 2790,
                'name' => '国立台湾海洋大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            290 => 
            array (
                'id' => 2791,
                'name' => '国立交通大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            291 => 
            array (
                'id' => 2792,
                'name' => '国立阳明大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            292 => 
            array (
                'id' => 2793,
                'name' => '国立中央大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            293 => 
            array (
                'id' => 2794,
                'name' => '国立中山大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            294 => 
            array (
                'id' => 2795,
                'name' => '国立中正大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            295 => 
            array (
                'id' => 2796,
                'name' => '国立东华大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            296 => 
            array (
                'id' => 2797,
                'name' => '国立暨南国际大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            297 => 
            array (
                'id' => 2798,
                'name' => '国立嘉义大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            298 => 
            array (
                'id' => 2799,
                'name' => '国立台北大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            299 => 
            array (
                'id' => 2800,
                'name' => '国立高雄大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            300 => 
            array (
                'id' => 2801,
                'name' => '国立宜兰大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            301 => 
            array (
                'id' => 2802,
                'name' => '国立台东大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            302 => 
            array (
                'id' => 2803,
                'name' => '国立联合大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            303 => 
            array (
                'id' => 2804,
                'name' => '国立台南大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            304 => 
            array (
                'id' => 2805,
                'name' => '国立金门大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            305 => 
            array (
                'id' => 2806,
                'name' => '台北市立大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            306 => 
            array (
                'id' => 2807,
                'name' => '国立屏东大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            307 => 
            array (
                'id' => 2808,
                'name' => '国立台湾师范大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            308 => 
            array (
                'id' => 2809,
                'name' => '国立高雄师范大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            309 => 
            array (
                'id' => 2810,
                'name' => '国立彰化师范大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            310 => 
            array (
                'id' => 2811,
                'name' => '国立台北教育大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            311 => 
            array (
                'id' => 2812,
                'name' => '国立台中教育大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            312 => 
            array (
                'id' => 2813,
                'name' => '国立新竹教育大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            313 => 
            array (
                'id' => 2814,
                'name' => '国立台湾艺术大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            314 => 
            array (
                'id' => 2815,
                'name' => '国立台北艺术大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            315 => 
            array (
                'id' => 2816,
                'name' => '国立台南艺术大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            316 => 
            array (
                'id' => 2817,
                'name' => '国立体育大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            317 => 
            array (
                'id' => 2818,
                'name' => '国立台湾体育运动大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            318 => 
            array (
                'id' => 2819,
                'name' => '东海大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            319 => 
            array (
                'id' => 2820,
                'name' => '辅仁大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            320 => 
            array (
                'id' => 2821,
                'name' => '东吴大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            321 => 
            array (
                'id' => 2822,
                'name' => '淡江大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            322 => 
            array (
                'id' => 2823,
                'name' => '中原大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            323 => 
            array (
                'id' => 2824,
                'name' => '逢甲大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            324 => 
            array (
                'id' => 2825,
                'name' => '中国文化大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            325 => 
            array (
                'id' => 2826,
                'name' => '静宜大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            326 => 
            array (
                'id' => 2827,
                'name' => '世新大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            327 => 
            array (
                'id' => 2828,
                'name' => '铭传大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            328 => 
            array (
                'id' => 2829,
                'name' => '实践大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            329 => 
            array (
                'id' => 2830,
                'name' => '义守大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            330 => 
            array (
                'id' => 2831,
                'name' => '长庚大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            331 => 
            array (
                'id' => 2832,
                'name' => '元智大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            332 => 
            array (
                'id' => 2833,
                'name' => '华梵大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            333 => 
            array (
                'id' => 2834,
                'name' => '中华大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            334 => 
            array (
                'id' => 2835,
                'name' => '大叶大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            335 => 
            array (
                'id' => 2836,
                'name' => '真理大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            336 => 
            array (
                'id' => 2837,
                'name' => '大同大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            337 => 
            array (
                'id' => 2838,
                'name' => '南华大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            338 => 
            array (
                'id' => 2839,
                'name' => '慈济大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            339 => 
            array (
                'id' => 2840,
                'name' => '长荣大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            340 => 
            array (
                'id' => 2841,
                'name' => '玄奘大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            341 => 
            array (
                'id' => 2842,
                'name' => '亚洲大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            342 => 
            array (
                'id' => 2843,
                'name' => '开南大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            343 => 
            array (
                'id' => 2844,
                'name' => '佛光大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            344 => 
            array (
                'id' => 2845,
                'name' => '明道大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            345 => 
            array (
                'id' => 2846,
                'name' => '康宁大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            346 => 
            array (
                'id' => 2847,
                'name' => '台湾首府大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            347 => 
            array (
                'id' => 2848,
                'name' => '高雄医学大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            348 => 
            array (
                'id' => 2849,
                'name' => '台北医学大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            349 => 
            array (
                'id' => 2850,
                'name' => '中山医学大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            350 => 
            array (
                'id' => 2851,
                'name' => '中国医药大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            351 => 
            array (
                'id' => 2852,
                'name' => '马偕医学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            352 => 
            array (
                'id' => 2853,
                'name' => '中信金融管理学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            353 => 
            array (
                'id' => 2854,
                'name' => '稻江科技暨管理学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            354 => 
            array (
                'id' => 2855,
                'name' => '法鼓文理学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            355 => 
            array (
                'id' => 2856,
                'name' => '国立台湾科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            356 => 
            array (
                'id' => 2857,
                'name' => '国立屏东科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            357 => 
            array (
                'id' => 2858,
                'name' => '国立台北科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            358 => 
            array (
                'id' => 2859,
                'name' => '国立云林科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            359 => 
            array (
                'id' => 2860,
                'name' => '国立高雄第一科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            360 => 
            array (
                'id' => 2861,
                'name' => '国立高雄应用科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            361 => 
            array (
                'id' => 2862,
                'name' => '国立高雄海洋科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            362 => 
            array (
                'id' => 2863,
                'name' => '国立虎尾科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            363 => 
            array (
                'id' => 2864,
                'name' => '国立澎湖科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            364 => 
            array (
                'id' => 2865,
                'name' => '国立勤益科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            365 => 
            array (
                'id' => 2866,
                'name' => '国立台北护理健康大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            366 => 
            array (
                'id' => 2867,
                'name' => '国立高雄餐旅大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            367 => 
            array (
                'id' => 2868,
                'name' => '国立台中科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            368 => 
            array (
                'id' => 2869,
                'name' => '国立台北商业大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            369 => 
            array (
                'id' => 2870,
                'name' => '国立台湾戏曲学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            370 => 
            array (
                'id' => 2871,
                'name' => '国立台南护理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            371 => 
            array (
                'id' => 2872,
                'name' => '国立台东专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            372 => 
            array (
                'id' => 2873,
                'name' => '朝阳科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            373 => 
            array (
                'id' => 2874,
                'name' => '南台科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            374 => 
            array (
                'id' => 2875,
                'name' => '昆山科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            375 => 
            array (
                'id' => 2876,
                'name' => '嘉南药理大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            376 => 
            array (
                'id' => 2877,
                'name' => '树德科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            377 => 
            array (
                'id' => 2878,
                'name' => '龙华科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            378 => 
            array (
                'id' => 2879,
                'name' => '辅英科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            379 => 
            array (
                'id' => 2880,
                'name' => '明新科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            380 => 
            array (
                'id' => 2881,
                'name' => '健行科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            381 => 
            array (
                'id' => 2882,
                'name' => '正修科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            382 => 
            array (
                'id' => 2883,
                'name' => '弘光科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            383 => 
            array (
                'id' => 2884,
                'name' => '明志科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            384 => 
            array (
                'id' => 2885,
                'name' => '建国科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            385 => 
            array (
                'id' => 2886,
                'name' => '万能科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            386 => 
            array (
                'id' => 2887,
                'name' => '岭东科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            387 => 
            array (
                'id' => 2888,
                'name' => '中国科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            388 => 
            array (
                'id' => 2889,
                'name' => '中台科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            389 => 
            array (
                'id' => 2890,
                'name' => '大仁科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            390 => 
            array (
                'id' => 2891,
                'name' => '圣约翰科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            391 => 
            array (
                'id' => 2892,
                'name' => '高苑科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            392 => 
            array (
                'id' => 2893,
                'name' => '元培医事科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            393 => 
            array (
                'id' => 2894,
                'name' => '台南应用科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            394 => 
            array (
                'id' => 2895,
                'name' => '远东科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            395 => 
            array (
                'id' => 2896,
                'name' => '德明财经科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            396 => 
            array (
                'id' => 2897,
                'name' => '中华医事科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            397 => 
            array (
                'id' => 2898,
                'name' => '东南科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            398 => 
            array (
                'id' => 2899,
                'name' => '景文科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            399 => 
            array (
                'id' => 2900,
                'name' => '南开科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            400 => 
            array (
                'id' => 2901,
                'name' => '侨光科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            401 => 
            array (
                'id' => 2902,
                'name' => '中华科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            402 => 
            array (
                'id' => 2903,
                'name' => '育达科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            403 => 
            array (
                'id' => 2904,
                'name' => '吴凤科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            404 => 
            array (
                'id' => 2905,
                'name' => '美和科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            405 => 
            array (
                'id' => 2906,
                'name' => '环球科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            406 => 
            array (
                'id' => 2907,
                'name' => '修平科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            407 => 
            array (
                'id' => 2908,
                'name' => '中州科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            408 => 
            array (
                'id' => 2909,
                'name' => '长庚科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            409 => 
            array (
                'id' => 2910,
                'name' => '台北城市科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            410 => 
            array (
                'id' => 2911,
                'name' => '醒吾科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            411 => 
            array (
                'id' => 2912,
                'name' => '大华科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            412 => 
            array (
                'id' => 2913,
                'name' => '文藻外语大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            413 => 
            array (
                'id' => 2914,
                'name' => '南荣科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            414 => 
            array (
                'id' => 2915,
                'name' => '华夏科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            415 => 
            array (
                'id' => 2916,
                'name' => '慈济科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            416 => 
            array (
                'id' => 2917,
                'name' => '致理科技大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            417 => 
            array (
                'id' => 2918,
                'name' => '大汉技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            418 => 
            array (
                'id' => 2919,
                'name' => '和春技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            419 => 
            array (
                'id' => 2920,
                'name' => '亚东技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            420 => 
            array (
                'id' => 2921,
                'name' => '桃园创新技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            421 => 
            array (
                'id' => 2922,
                'name' => '兰阳技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            422 => 
            array (
                'id' => 2923,
                'name' => '德霖技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            423 => 
            array (
                'id' => 2924,
                'name' => '东方设计学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            424 => 
            array (
                'id' => 2925,
                'name' => '经国管理暨健康学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            425 => 
            array (
                'id' => 2926,
                'name' => '黎明技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            426 => 
            array (
                'id' => 2927,
                'name' => '大同技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            427 => 
            array (
                'id' => 2928,
                'name' => '崇右技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            428 => 
            array (
                'id' => 2929,
                'name' => '亚太创意技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            429 => 
            array (
                'id' => 2930,
                'name' => '台湾观光学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            430 => 
            array (
                'id' => 2931,
                'name' => '台北海洋技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            431 => 
            array (
                'id' => 2932,
                'name' => '仁德医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            432 => 
            array (
                'id' => 2933,
                'name' => '马偕医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            433 => 
            array (
                'id' => 2934,
                'name' => '慈惠医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            434 => 
            array (
                'id' => 2935,
                'name' => '树人医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            435 => 
            array (
                'id' => 2936,
                'name' => '耕莘健康管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            436 => 
            array (
                'id' => 2937,
                'name' => '育英医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            437 => 
            array (
                'id' => 2938,
                'name' => '敏惠医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            438 => 
            array (
                'id' => 2939,
                'name' => '高美医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            439 => 
            array (
                'id' => 2940,
                'name' => '新生医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            440 => 
            array (
                'id' => 2941,
                'name' => '圣母医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            441 => 
            array (
                'id' => 2942,
                'name' => '崇仁医护管理专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            442 => 
            array (
                'id' => 2943,
                'name' => '中央警察大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            443 => 
            array (
                'id' => 2944,
                'name' => '台湾警察专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            444 => 
            array (
                'id' => 2945,
                'name' => '国防大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            445 => 
            array (
                'id' => 2946,
                'name' => '国防医学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            446 => 
            array (
                'id' => 2947,
                'name' => '陆军军官学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            447 => 
            array (
                'id' => 2948,
                'name' => '海军军官学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            448 => 
            array (
                'id' => 2949,
                'name' => '空军军官学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            449 => 
            array (
                'id' => 2950,
                'name' => '陆军专科学校',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            450 => 
            array (
                'id' => 2951,
                'name' => '空军航空技术学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            451 => 
            array (
                'id' => 2952,
                'name' => '基督教台湾浸会神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            452 => 
            array (
                'id' => 2953,
                'name' => '台北基督学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            453 => 
            array (
                'id' => 2954,
                'name' => '一贯道天皇学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            454 => 
            array (
                'id' => 2955,
                'name' => '台湾神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            455 => 
            array (
                'id' => 2956,
                'name' => '玉山神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            456 => 
            array (
                'id' => 2957,
                'name' => '台南神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            457 => 
            array (
                'id' => 2958,
                'name' => '中台神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            458 => 
            array (
                'id' => 2959,
                'name' => '三育基督学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            459 => 
            array (
                'id' => 2960,
                'name' => '圣光神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            460 => 
            array (
                'id' => 2961,
                'name' => '圣德基督学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            461 => 
            array (
                'id' => 2962,
                'name' => '台湾浸信宣道会神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            462 => 
            array (
                'id' => 2963,
                'name' => '中华福音神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            463 => 
            array (
                'id' => 2964,
                'name' => '中华信义神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            464 => 
            array (
                'id' => 2965,
                'name' => '佛光山丛林学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            465 => 
            array (
                'id' => 2966,
                'name' => '神召神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            466 => 
            array (
                'id' => 2967,
                'name' => '灵粮教牧宣教神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            467 => 
            array (
                'id' => 2968,
                'name' => '天主教台湾总修院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            468 => 
            array (
                'id' => 2969,
                'name' => '法鼓山僧伽大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            469 => 
            array (
                'id' => 2970,
                'name' => '辅仁圣博敏神学院',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            470 => 
            array (
                'id' => 2971,
                'name' => '国立空中大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            471 => 
            array (
                'id' => 2972,
                'name' => '高雄市立空中大学',
                'city' => '台湾省',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            472 => 
            array (
                'id' => 2973,
                'name' => '明爱专上学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            473 => 
            array (
                'id' => 2974,
                'name' => '明德学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            474 => 
            array (
                'id' => 2975,
                'name' => '珠海学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            475 => 
            array (
                'id' => 2976,
                'name' => '香港城市大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            476 => 
            array (
                'id' => 2977,
                'name' => '宏恩基督教学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            477 => 
            array (
                'id' => 2978,
                'name' => '港专学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            478 => 
            array (
                'id' => 2979,
                'name' => '香港演艺学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            479 => 
            array (
                'id' => 2980,
                'name' => '香港浸会大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            480 => 
            array (
                'id' => 2981,
                'name' => '香港能仁专上学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            481 => 
            array (
                'id' => 2982,
                'name' => '香港树仁大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            482 => 
            array (
                'id' => 2983,
                'name' => '岭南大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            483 => 
            array (
                'id' => 2984,
                'name' => '香港高等教育科技学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            484 => 
            array (
                'id' => 2985,
                'name' => '香港中文大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            485 => 
            array (
                'id' => 2986,
                'name' => '香港教育大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            486 => 
            array (
                'id' => 2987,
                'name' => '香港恒生大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            487 => 
            array (
                'id' => 2988,
                'name' => '香港理工大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            488 => 
            array (
                'id' => 2989,
                'name' => '香港科技大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            489 => 
            array (
                'id' => 2990,
                'name' => '香港公开大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            490 => 
            array (
                'id' => 2991,
                'name' => '香港大学',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            491 => 
            array (
                'id' => 2992,
                'name' => '东华学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            492 => 
            array (
                'id' => 2993,
                'name' => '香港伍伦贡学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            493 => 
            array (
                'id' => 2994,
                'name' => '耀中幼教学院',
                'city' => '香港特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            494 => 
            array (
                'id' => 2995,
                'name' => '澳门大学',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            495 => 
            array (
                'id' => 2996,
                'name' => '澳门理工学院',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            496 => 
            array (
                'id' => 2997,
                'name' => '澳门旅游学院',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            497 => 
            array (
                'id' => 2998,
                'name' => '澳门保安部队高等学校',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            498 => 
            array (
                'id' => 2999,
                'name' => '澳门城市大学',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            499 => 
            array (
                'id' => 3000,
                'name' => '圣若瑟大学',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
        ));
        \DB::table('university')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'name' => '澳门镜湖护理学院',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            1 => 
            array (
                'id' => 3002,
                'name' => '澳门科技大学',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            2 => 
            array (
                'id' => 3003,
                'name' => '澳门管理学院',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
            3 => 
            array (
                'id' => 3004,
                'name' => '中西创新学院',
                'city' => '澳门特别行政区',
                'code' => NULL,
                'supervisor' => NULL,
                'level' => NULL,
                'type' => NULL,
            ),
        ));
        
        
    }
}