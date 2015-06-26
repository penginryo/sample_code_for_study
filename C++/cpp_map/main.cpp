#include <iostream>
#include <string>
#include <map>
#include <fstream>

#define EOF_STRING "qawsedrftgyhujikolp"

using namespace std;

class Input{
protected:
    ifstream input;
    string filepath;
    map <string, int> classMap;

public:
    Input(string filepath){
        input.open(filepath);
        if(input.fail()){
            cout << "Itput file couldn't be opened" << endl;
            exit(0);
        }
    }
    ~Input(){
        input.close();
    }

    string fetchLine(){
        if(!input)
            return EOF_STRING;

        int fileChar;
        string word = "";
        while ((fileChar = input.get()) != EOF || fileChar != EOF){
            if (fileChar == '\n'){
                break;
            }
            word += (char)fileChar;
        }
        return word;
    }

    void mapping(){

        string className;

        while((className = fetchLine()) != EOF_STRING){
            classMap[className]++;
        }
    }

    void printMap(){
        for(auto itr = classMap.cbegin(); itr != classMap.cend(); ++itr){
            cout << itr->first << " " << itr->second << endl;
        }
    }
};

int main() {

    string filepath = "/Users/penginryo/ClionProjects/cpp_map/input.txt";

    Input input(filepath);

    input.mapping();
    input.printMap();

     return 0;
}
