#include <iostream>
#include <fstream>
#include <string>
#include <stack>

using namespace std;

class ErrorFinderForHTML{
private:
    ifstream input;
public:
    ErrorFinderForHTML(string filepath){
        input.open(filepath);
        if(input.fail()){
            cout << "Itput file couldn't be opened" << endl;
            exit(0);
        }
    }
    ~ErrorFinderForHTML(){
        input.close();
    }

    int openTagFinder(){
        char current_char;
        int placeOfOpeningTag;

        while((current_char = input.get()) != '<'){
            placeOfOpeningTag = (int) input.tellg();
            return placeOfOpeningTag;
        }
    }
};

int main() {
    ErrorFinderForHTML input("/Users/penginryo/ClionProjects/cpp_stack/test.html");
    return 0;
}